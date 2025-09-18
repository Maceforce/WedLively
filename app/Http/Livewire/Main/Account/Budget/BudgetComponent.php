<?php
// app/Http/Livewire/Main/Account/Budget/BudgetComponent.php
namespace App\Http\Livewire\Main\Account\Budget;

use Livewire\Component;
use App\Models\Budget;
use App\Models\UserWeddingPlanning;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BudgetComponent extends Component
{
    public $pageTitle;

    public $budgets = [];
    public $estimatedBudget;
    public $newBudget = ['category' => '', 'amount' => 1];
    public $vendorCount;
    public $vendors = [];
    public $subcategories = [];

    protected $rules = [
        'newBudget.category' => 'required|string|max:255',
        'newBudget.amount' => 'required|numeric|min:0',
    ];

    public function mount()
    {
        $this->pageTitle = 'Profile - Budget - Wedding Planning';

        $this->budgets = Budget::where('user_id', Auth::id())->get();

        $this->estimatedBudget = UserWeddingPlanning::where('user_id', Auth::id())->value('estimated_budget');
        // Load and count vendors
        $userWeddingPlanning = UserWeddingPlanning::where('user_id', Auth::id())->first();

		/*if ($userWeddingPlanning) {
			$this->vendors = $userWeddingPlanning->subcategories ?? [];
			$this->vendorCount = count($this->vendors);
		}*/
        
        if ($userWeddingPlanning) {
			// Decode `subcategories` only if it's a JSON-encoded string
			if (is_string($userWeddingPlanning->subcategories)) {
				$this->vendors = json_decode($userWeddingPlanning->subcategories, true); // Decode into an array
			} else {
				$this->vendors = $userWeddingPlanning->subcategories; // Use as-is if already an array
			}

			// Calculate the vendor count
			$this->vendorCount = count($this->vendors);
		}

        
		 /*if ($userWeddingPlanning) {
			$this->vendors = $userWeddingPlanning->subcategories ?? []; // Already an array
			$this->vendorCount = count($this->vendors);
		}*/


		
		//echo Auth::id();

        /*echo '<pre>';
        print_r($userWeddingPlanning);
        echo '</pre>';
        die("jk");*/

        $this->updateEstimatedBudget();
    }

    public function render()
    {
        return view('livewire.main.account.budget.budget')->extends('livewire.main.layout.app')->section('content');
    }

    public function updateEstimatedBudget()
    {
        $validatedData = $this->validate([
            'estimatedBudget' => 'required|numeric|min:0',
        ]);
    
        // Update the estimated budget in the UserWeddingPlanning model
        UserWeddingPlanning::updateOrCreate(
            ['user_id' => Auth::id()],
            ['estimated_budget' => $this->estimatedBudget]
        );
    
        // Calculate equal distribution for each budget category
        $categoryCount = count($this->budgets);
        $dividedAmount = $this->estimatedBudget / $categoryCount;
    
        foreach ($this->budgets as $budget) {
            // Assign the divided amount to each budget category
            $budget->amount = $dividedAmount;
            $budget->save();
        }
    
        // Notify the user of the update
        $this->dispatchBrowserEvent('notify', [
            'type' => 'success',
            'message' => 'Estimated budget updated and distributed across categories successfully.'
        ]);
    }
    
    public function addBudget()
    {
        // Manually define validation rules and messages
        $validator = Validator::make($this->newBudget, [
            'category' => 'required|string|max:255',
            'amount' => 'required|regex:/^\d+(,\d+)*$/', // Only numbers and commas allowed
        ], [
            'amount.regex' => 'The amount field must only contain numbers and commas.',
        ]);


        if ($validator->fails()) {
            foreach ($validator->errors()->messages() as $key => $messages) {
                $this->addError('newBudget.' . $key, $messages[0]);
            }
            return;
        }

        // Split the comma-separated values for both category and amount
        $categories = explode(',', $this->newBudget['category']);
        $amounts = explode(',', $this->newBudget['amount']);

        // Check if categories and amounts have the same count
        if (count($categories) !== count($amounts)) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'error',
                'message' => 'The number of categories and amounts must match.'
            ]);
            return;
        }
        foreach ($categories as $index => $category) {
            // Remove any extra spaces around the category and amount
            $category = trim($category);
            $amount = trim($amounts[$index]);

            // Create a new budget entry for each pair
            Budget::create([
                'user_id' => Auth::id(),
                'category' => $category,
                'amount' => $amount,
            ]);
        }

        // Reset the input fields
        $this->newBudget = ['category' => '', 'amount' => 0];
       $this->budgets = Budget::where('user_id', Auth::id())->get(); // Refresh the list
    }


    public function deleteBudget($budgetId)
    {
        $budget = Budget::find($budgetId);
        if ($budget) {
            $budget->delete();
            $this->budgets = Budget::where('user_id', Auth::id())->get(); // Refresh the list
        }
        $this->dispatchBrowserEvent('refreshPage');
    }
}
