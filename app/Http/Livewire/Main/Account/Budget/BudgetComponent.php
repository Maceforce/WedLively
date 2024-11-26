<?php
// app/Http/Livewire/Main/Account/Budget/BudgetComponent.php
namespace App\Http\Livewire\Main\Account\Budget;

use Livewire\Component;
use App\Models\Budget;
use Illuminate\Support\Facades\Auth;

class BudgetComponent extends Component
{
    public $budgets = [];
    public $newBudget = ['category' => '', 'amount' => 0];

    protected $rules = [
        'newBudget.category' => 'required|string|max:255',
        'newBudget.amount' => 'required|numeric|min:0',
    ];

    public function mount()
    {
        $this->budgets = Budget::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.main.account.budget.budget')->extends('livewire.main.layout.app')->section('content');
    }

    public function addBudget()
    {
        $this->validate();

        Budget::create([
            'user_id' => Auth::id(),
            'category' => $this->newBudget['category'],
            'amount' => $this->newBudget['amount'],
        ]);

        // Reset the new budget input
        $this->newBudget = ['category' => '', 'amount' => 0];
        $this->budgets = Budget::where('user_id', Auth::id())->get();
    }

    public function deleteBudget($budgetId)
    {
        $budget = Budget::find($budgetId);
        if ($budget) {
            $budget->delete();
            $this->budgets = Budget::where('user_id', Auth::id())->get(); // Refresh the list
        }
    }
}

