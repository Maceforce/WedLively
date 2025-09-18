<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Event;
use App\Models\Group;
use App\Models\UserWeddingPlanning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserWeddingPlanningController extends Controller
{
    // Store a newly created wedding planning entry in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'partner_name' => 'required|string|max:255',
            'number_of_guests' => 'required|integer',
            'estimated_budget' => 'required|numeric',
            'location' => 'required|string|max:255',
            'events' => 'nullable|array',
            'subcategory' => 'nullable|array',
            'group' => 'nullable|array',
        ]);

        $userWeddingPlanning = UserWeddingPlanning::create([
            'user_id' => Auth::id(), // Assuming you want to associate it with the logged-in user
            'name' => $request->name,
            'partner_name' => $request->partner_name,
            'email' => auth()->user()->email,
            'wedding_date' => $request->weddingdate,
            'number_of_guests' => $request->number_of_guests,
            'estimated_budget' => $request->estimated_budget,
            'location_id' => $request->location,
            'subcategories' => $request->subcategory ? json_encode($request->subcategory) : null,
            'events' => $request->event ? json_encode($request->event) : null,
			'groups' => $request->group ? json_encode($request->group) : null,
        ]);

        $estimatedBudget = $request->estimated_budget;
        $selectedVendors = $request->input('subcategory');
        $selectedCount = is_array($selectedVendors) ? count($selectedVendors) : 0;

		$selectedEvents = $request->input('event');
        $selectedEventsCount = is_array($selectedEvents) ? count($selectedEvents) : 0;

        $selectedGroups = $request->input('group');
        $selectedGroupsCount = is_array($selectedGroups) ? count($selectedGroups) : 0;

        if ($selectedCount > 0) {
            $baseBudget = floor($estimatedBudget / $selectedCount);
            $remainingBudget = $estimatedBudget - ($baseBudget * $selectedCount);
            $vendorBudgets = [];

            foreach ($selectedVendors as $vendor) {
                $randomAllocation = rand(0, $remainingBudget);
                $vendorBudget = $baseBudget + $randomAllocation;
                $vendorBudgets[$vendor] = $vendorBudget;
                $remainingBudget -= $randomAllocation;
            }

            // Save each vendor's budget to the database
            foreach ($selectedVendors as $vendor) {
                Budget::create([
                    'user_id' => Auth::id(),
                    'category' => $vendor,
                    'amount' => $vendorBudgets[$vendor] // This should be a numeric value
                ]);
            }	
			
        }
		
		if ($selectedEventsCount > 0) {

			// Save each events
            foreach ($selectedEvents as $event) {
                Event::create([
                    'user_id' => Auth::id(),
                    'name' => $event,
                ]);
            }

		}

        if ($selectedGroupsCount > 0) {

			// Save each events
            foreach ($selectedGroups as $group) {
                Group::create([
                    'user_id' => Auth::id(),
                    'name' => $group,
                ]);
            }

		}

        $suggstedVend =$this->fetchWeddingPlanning();

       return response()->json(['success' => 'Wedding planning entry created successfully.','data' => $suggstedVend]);
     
        //return redirect()->back()->with('success', 'Wedding planning entry created successfully.', 'html' => $html);
    }

	public function fetchWeddingPlanning()
	{
		$weddingPlanning = UserWeddingPlanning::where('user_id', auth()->id())->first();

        $staticSubcategories = [
			'Catering' => [
				'icon' => 'fa-utensils', // Font Awesome or similar
				'description' => 'Find experienced chefs, bartenders, and caterers to craft the ultimate menu to remember.',
				'link' => '/categories/vendors/catering',
                'imgsrc'=> 'public/img/home/cateringimg.jpg',
			],
			'Decorators' => [
				'icon' => 'fa-paint-brush',
				'description' => 'Creative decorators to beautify your venue.',
				'link' => '/categories/vendors/decorators',
                'imgsrc'=> 'public/img/home/decorations.jpg',
			],
			"DJ's" => [
				'icon' => 'fa-music',
				'description' => 'From oldies to soul, discover live wedding DJs that play all styles of music.',
				'link' => "/categories/vendors/dJ's",
                'imgsrc'=> 'public/img/home/dj.jpg',
			],
			'Imams' => [
				'icon' => 'fa-quran',
				'description' => 'Qualified Imams for conducting your ceremony.',
				'link' => '/categories/vendors/imams',
                'imgsrc'=> 'public/img/home/imam.jpg',
			],
			'Makeup/Heena Artists' => [
				'icon' => 'fa-magic',
				'description' => 'Talented makeup and Henna artists for the bride.',
				'link' => '/categories/vendors/makeup-heena-artists',
                'imgsrc'=> 'public/img/home/makeup.jpg',
			],
			'Photographers' => [
				'icon' => 'fa-camera',
				'description' => "Browse local photographers and their work to find one who’ll capture the essence of your day.",
				'link' => '/categories/vendors/photographers',
                'imgsrc'=> 'public/img/home/photo.jpg',
			],
			'venues' => [
				'icon' => 'fa-building',
				'description' => 'Explore and tour top-rated reception venues to book a special space to celebrate your love.',
				'link' => '/categories/vendors/venues',
                'imgsrc'=> 'public/img/home/venue.jpg',
			],
			'Videographers' => [
				'icon' => 'fa-video',
				'description' => 'Expert videographers to record your special day.',
				'link' => '/categories/vendors/videographers',
                'imgsrc'=> 'public/img/home/video.jpg',
			]
		];

       

		//$this->events = Event::all();

        //$this->subcategories = Subcategory::where('parent_id', $this->category_parent_id)->orderBy('name')->get();
		
		//$weddingPlanning = WeddingPlanning::find($request->id); // Adjust this to fetch the data
		//$staticSubcategories = $this->getStaticSubcategories(); // Define this method or data

		if ($weddingPlanning && (is_array($weddingPlanning->subcategories) || is_string($weddingPlanning->subcategories))) {
             
			$subcategories = is_string($weddingPlanning->subcategories)
				? json_decode($weddingPlanning->subcategories, true)
				: $weddingPlanning->subcategories;
            /* echo '<pre>';
             print_r($subcategories);
             echo '</pre>';
        die("fgfgd"); */

			$htmls = '';
			foreach ($subcategories as $subcategory) {
				$details = $staticSubcategories[$subcategory] ?? null;

				if ($details) {
					$htmls .= '<div class="vendor-section">';
					$htmls .= '<img src="/' . $details['imgsrc'] . '" alt="' . $subcategory . '">';
					$htmls .= '<div>';
					$htmls .= '<a href="' . $details['link'] . '" class="category">Wedding ' . $subcategory . '<span class="arrow"> → </span></a>';
					$htmls .= '<p class="vendor-description">' . $details['description'] . '</p>';
					$htmls .= '</div></div>';
				} else {
					$htmls .= '<li>Wedding ' . $subcategory . '</li>';
				}
			}
		} else {
			$htmls = '<p>No subcategory data available.</p>';
		}

        return $htmls;

        /*echo '<pre>';
        print_r($html);
		echo '</pre>';
        die("test");*/

		//return response()->json(['html' => $html]);
	}

}
