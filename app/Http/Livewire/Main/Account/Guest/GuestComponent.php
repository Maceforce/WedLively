<?php

namespace App\Http\Livewire\Main\Account\Guest;

use App\Models\Guest;
use App\Models\Group;
use App\Models\Event;
use App\Models\EventRsvp;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\GuestInvitation;

class GuestComponent extends Component
{
    public $guests = [];
    public $groups = [];
    public $events = [];
    public $selectedEvents = [];
    public $selectedGuests = [];
    public $currentTab = 'overview';

    public $first_name;
    public $last_name;
    public $name;
    public $phone;
    public $email;
    public $age;
    public $address;
    public $city;
    public $state;
    public $zip_code;
    public $needhotel = false;

    public $group_id;
    public $event_id;
    public $rsvp_status = 'Pending';

    //public $groupsWithGuests;

    public $eventIds;

    public $groupsLists;

    public $groupsWithGuests = [];

    public $groupsWithGuestss = [];
	
	
	

	public $isModalOpen = true; // Make sure the modal stays open
	

    /*protected $rules = [
		'first_name' => 'required|string|max:50',
		'last_name' => 'required|string|max:50',
		'age' => 'required|in:1,2,3',
		'email' => 'required|email|unique:guests,email',
		'phone' => 'required|string|min:10|max:15',
		'group_id' => 'nullable|exists:groups,id',
	];*/
	
protected $rules = [
    'first_name' => [
        'required',
        'string',
        'max:50',
        'regex:/^[a-zA-Z\s]+$/', // Only letters and spaces allowed
    ],
    'last_name' => [
        'required',
        'string',
        'max:50',
        'regex:/^[a-zA-Z\s]+$/', // Only letters and spaces allowed
    ],
    'age' => [
        'required',
        'in:1,2,3', // Age group: 1=Adult, 2=Child, 3=Baby
    ],
    'email' => [
        'required',
        'email',
        'max:100', // Increased max length for better support
        'unique:guests,email', // Check uniqueness in the guests table
    ],
    'phone' => [
        'required',
        'string',
        'min:10',
        'max:15',
        'regex:/^[0-9]+$/', // Ensure only numbers are allowed
    ],
    'address' => [
        'required',
        'string',
        'max:255', // A reasonable max length for an address
    ],
    'city' => [
        'required',
        'string',
        'max:100', // A reasonable max length for a city name
    ],
    'state' => [
        'required',
        'string',
        'max:100', // A reasonable max length for a state name
    ],
    'zip_code' => [
        'required',
        'string',
        'min:5',
        'max:10',
        'regex:/^[0-9\-]+$/', // Allow numbers and hyphens for zip code
    ],
    'group_id' => [
        'nullable',
        'exists:groups,id', // Ensure group ID exists in the groups table
    ],
];

	
	
protected $messages = [
    'first_name.required' => 'First name is required.',
    'first_name.regex' => 'First name can only contain letters and spaces.',
    'last_name.required' => 'Last name is required.',
    'last_name.regex' => 'Last name can only contain letters and spaces.',
    'age.required' => 'Please select an age group.',
    'email.required' => 'Email address is required.',
    'email.email' => 'Please enter a valid email address.',
    'email.unique' => 'The email address is already in use.',
    'phone.required' => 'Phone number is required.',
    'phone.regex' => 'Phone number can only contain digits.',
    'address.required' => 'Address is required.',
    'address.max' => 'Address cannot exceed 255 characters.',
    'city.required' => 'City is required.',
    'city.max' => 'City name cannot exceed 100 characters.',
    'state.required' => 'State is required.',
    'state.max' => 'State name cannot exceed 100 characters.',
    'zip_code.required' => 'Zip code is required.',
    'zip_code.regex' => 'Zip code can only contain numbers and hyphens.',
    'zip_code.min' => 'Zip code must be at least 5 characters.',
    'zip_code.max' => 'Zip code cannot exceed 10 characters.',
    'group_id.exists' => 'The selected group is invalid.',
];



    public function mount()
    {

		$this->needhotel =true;

       $this->groupsWithGuestss = Group::with(['guests', 'events'])
    ->where('user_id', Auth::id()) // Filter groups based on the authenticated user
    ->get()
    ->map(function ($group) {
        return [
            'id' => $group->id,
            'name' => $group->name,
            'guests' => $group->guests->map(function ($guest) use ($group) {
                return [
                    'id' => $guest->id,
                    'name' => $guest->name,
                    'rsvp_status' => $guest->rsvp_status,
                    'phone' => $guest->phone,
                    'email' => $guest->email,
                    'rsvp_statuses' => $group->events->mapWithKeys(function ($event) use ($guest, $group) {
                        $rsvp = EventRsvp::where('guest_id', $guest->id)
                            ->where('event_id', $event->id)
                            ->where('group_id', $group->id) // Ensure the RSVP belongs to the group
                            ->first();
                        return [$event->id => $rsvp ? $rsvp->rsvp_status : 'Pending'];
                    }),
                ];
            }),
            'events' => $group->events->map(function ($event) use ($group) {
                // Ensure only events associated with the group are included
                return [
                    'id' => $event->id,
                    'name' => $event->name,
                    'description' => $event->description,
                    'start_date' => $event->start_date,
                    'end_date' => $event->end_date,
                ];
            })->unique('id'), // Remove duplicate events based on their ID
        ];
    })
    ->toArray();
    

      /* $this->groupsWithGuestss = Group::with(['guests', 'events'])
		   ->where('user_id', Auth::id()) // Filter groups based on the authenticated user
		   ->get()
		   ->map(function ($group) {
			   return [
				   'id' => $group->id,
				   'name' => $group->name,
				   'guests' => $group->guests->map(function ($guest) use ($group) {
					   return [
						   'id' => $guest->id,
						   'name' => $guest->name,
						   'rsvp_status' => $guest->rsvp_status,
						   'phone' => $guest->phone,
						   'email' => $guest->email,
						   'rsvp_statuses' => $group->events->mapWithKeys(function ($event) use ($guest) {
							   $rsvp = EventRsvp::where('guest_id', $guest->id)
								   ->where('event_id', $event->id)
                                   //->where('group_id', $group->id)
								   ->first();
							   return [$event->id => $rsvp ? $rsvp->rsvp_status : 'Pending'];
						   }),
					   ];
				   }),
				   'events' => $group->events->map(function ($event) use ($group){
					   return [
						   'id' => $event->id,
						   'name' => $event->name,
						   'description' => $event->description,
						   'start_date' => $event->start_date,
						   'end_date' => $event->end_date,
					   ];
				   }),
			   ];
		   })
		   ->toArray();*/
      
        
       /* $this->groupsWithGuestss = Group::with(['guests', 'events'])->get()->map(function ($group) {
            return [
                'id' => $group->id,
                'name' => $group->name,
                'guests' => $group->guests->map(function ($guest) use ($group) {
                    return [
                        'id' => $guest->id,
                        'name' => $guest->name,
                        'rsvp_status' => $guest->rsvp_status,
                        'phone' => $guest->phone,
                        'email' => $guest->email,
                        'rsvp_statuses' => $group->events->mapWithKeys(function ($event) use ($guest) {
                            $rsvp = EventRsvp::where('guest_id', $guest->id)
                                            ->where('event_id', $event->id)
                                            ->first();
                            return [$event->id => $rsvp ? $rsvp->rsvp_status : 'Pending'];
                        }),
                    ];
                }),
                'events' => $group->events->map(function ($event) {
                    return [
                        'id' => $event->id,
                        'name' => $event->name,
                        'description' => $event->description,
                        'start_date' => $event->start_date,
                        'end_date' => $event->end_date,
                    ];
                }),
            ];
        })->toArray();   */

		/*$this->groupsWithGuestss = Group::where('user_id', Auth::id()) // Filter by user ID
    ->with(['guests', 'events'])
    ->get()
    ->map(function ($group) {
        return [
            'id' => $group->id,
            'name' => $group->name,
            'guests' => $group->guests->map(function ($guest) use ($group) {
                return [
                    'id' => $guest->id,
                    'name' => $guest->name,
                    'rsvp_status' => $guest->rsvp_status,
                    'phone' => $guest->phone,
                    'email' => $guest->email,
                    'rsvp_statuses' => $group->events->mapWithKeys(function ($event) use ($guest) {
                        $rsvp = EventRsvp::where('guest_id', $guest->id)
                                        ->where('event_id', $event->id)
                                        ->first();
                        return [$event->id => $rsvp ? $rsvp->rsvp_status : 'Pending'];
                    }),
                ];
            }),
            'events' => $group->events->map(function ($event) {
                return [
                    'id' => $event->id,
                    'name' => $event->name,
                    'description' => $event->description,
                    'start_date' => $event->start_date,
                    'end_date' => $event->end_date,
                ];
            }),
        ];
    })->toArray();*/


       /*echo '<pre>';
       print_r($this->groupsWithGuestss);
       echo '</pre>';

       die("dfdfdf");*/

        /* $this->groupsWithGuests = [
             'groups' => Group::with('guests')->get()->map(function ($group) {
                 return [
                     'id' => $group->id,
                    'name' => $group->name,
                    'guests' => $group->guests->map(function ($guest) {
                        return [
                             'id' => $guest->id,
                            'name' => $guest->name,
                             'rsvp_status' => $guest->rsvp_status,
                             'phone' => $guest->phone,
                            'email' => $guest->email,
                        ];
                     }),
                 ];
             })->toArray(),
             'events' => Event::all()->map(function ($event) {
                 return [
                     'id' => $event->id,
                    'name' => $event->name,
                     'description' => $event->description,
                     'start_date' => $event->start_date,
                     'end_date' => $event->end_date,
                 ];
             })->toArray(),
         ];  */

		$this->loadGuests();
        //$this->events = Event::where('user_id', Auth::id())->get();
        $this->guests = Guest::where('user_id', Auth::id())->get();        
        //$this->groups = Group::all();
        $this->groups = Group::where('user_id', Auth::id())->get();
        //$this->events = Event::all();
        $this->events = Event::where('user_id', Auth::id())->get();
        foreach ($this->events as $event) {
            $this->selectedEvents[$event->id] = true;
        }

       /* echo Auth::id();
       	echo '<pre>';
		print_r($this->groupsWithGuestss);
        echo '</pre>';
        die("test");*/
    }

    public function loadGuests()
    {
        $this->guests = Guest::where('user_id', Auth::id())->get();
    }

	public function updateRsvp($guestId, $eventId, $status)
    {

		//echo $guestId.",". $eventId.",". $status;
        //die("test");
        $guest = Guest::find($guestId);

        if (!$guest || !$guest->group_id) {
            // Handle invalid guest or missing group
            session()->flash('error', 'Invalid guest or group not found.');
            return;
        }

        EventRsvp::updateOrCreate(
            [
                'guest_id' => $guestId,
                'event_id' => $eventId,
                'group_id' => $guest->group_id, // Use guest's group ID
            ],
            [                
                'rsvp_status' => $status,
            ]
        );

        session()->flash('success', 'RSVP updated successfully.');
		$this->dispatchBrowserEvent('hide-success-message');
    }
	
	public function updated($propertyName)
	{
		$this->validateOnly($propertyName);
	}

	public function addGuest()
	{
		
	
		try {		
			
			 /*$validatedData = $this->validate([
				'first_name' => 'required|string|max:50',
				'last_name' => 'required|string|max:50',
				'age' => 'required|in:1,2,3',
				'email' => 'required|email|unique:guests,email',
				'phone' => 'required|string|min:10|max:15',
				'group_id' => 'required|exists:groups,id',
			], [
				'email.required' => 'The email address is required.',
				'email.email' => 'Please provide a valid email address.',
				'email.unique' => 'The email address is already in use.',
			]);*/
			
			$validatedData = $this->validate([
				'first_name' => 'required|string|max:50',
				'last_name' => 'required|string|max:50',
				'age' => 'required|in:1,2,3',
				'email' => 'required|email|unique:guests,email',
				'phone' => 'required|string|min:10|max:15',
				'group_id' => 'required|exists:groups,id',
			], [
				'first_name.required' => 'First name is required.',
				'last_name.required' => 'Last name is required.',
				'email.required' => 'The email address is required.',
				'email.email' => 'Please provide a valid email address.',
				'email.unique' => 'The email address is already in use.',
				'phone.required' => 'Phone number is required.',
				'phone.min' => 'Phone number must be at least 10 digits.',
				'phone.max' => 'Phone number can be at most 15 digits.',
				'group_id.exists' => 'Thegroup_id is required.',
			]);

			//dd($this->getErrorBag()->toArray());
			//dd($validatedData); 

			//$validatedData = $this->validate();

			// echo $this->first_name; die("fhgfh");

			$eventIds = ''; // Initialize variable for event IDs
			foreach ($this->selectedEvents as $eventId => $isSelected) {
				if ($isSelected) {
					$eventIds .= $eventId . ','; 
				}
			}

			if (!empty($eventIds)) {
				$eventIds = rtrim($eventIds, ','); 
			}

			// Create the guest record
			$guest = Guest::create([
				'user_id' => Auth::id(),
				'name' => $this->first_name . ' ' . $this->last_name,
				'first_name' => $this->first_name,
				'last_name' => $this->last_name,
				'email' => $this->email,
				'phone' => $this->phone,
				'age' => $this->age,
				'address' => $this->address,
				'city' => $this->city,
				'state' => $this->state,
				'zip_code' => $this->zip_code,
				'needhotel' => $this->needhotel, 
				'invited_to' => $eventIds,
				'group_id' => $this->group_id,
				'rsvp_status' => $this->rsvp_status,
			]);

			$guestId = $guest->id;

			if ($guestId) {
				foreach ($this->selectedEvents as $eventId => $isSelected) {
					if ($isSelected) {
						// Check if the RSVP already exists
						$existingRsvp = EventRsvp::where('group_id', $this->group_id)
							->where('guest_id', $guestId)
							->where('event_id', $eventId)
							->first();

						if (!$existingRsvp) {
							// Create new RSVP only if it doesn't already exist
							EventRsvp::create([
								'group_id' => $this->group_id,
								'guest_id' => $guestId,
								'event_id' => $eventId,
								'rsvp_status' => 'Pending',
							]);
						}
					}
				}
			}

			session()->flash('message', 'Guest added and invitation sent!');
			$this->emit('modalClosed');
			//$this->reset(['first_name', 'last_name', 'age', 'email', 'phone', 'group_id']);
            $this->resetForm();            
			$this->loadGuests();
			//$this->emit('dataSaved');
		} catch (\Illuminate\Validation\ValidationException $e) {
			
			$this->emit('validationError', $e->errors());
			// Log validation errors to the log file
			\Log::error('Validation failed in adding guest: ' . $e->getMessage());

			// You can also flash a specific error message to the session
			session()->flash('error', 'There was an error with your input. Please check and try again.');

			// Optionally, display the validation errors to the user if necessary
			//$this->emit('validationError', $e->errors());

		} catch (\Exception $e) {
			// Catch any other unexpected exceptions
			\Log::error('Unexpected error in adding guest: ' . $e->getMessage());

			// Flash a generic error message
			session()->flash('error', 'An unexpected error occurred. Please try again later.');
		}
		//$this->resetForm();
		//$this->loadGuests();
		//$this->emit('dataSaved');

        //$this->emit('modalClosed');
	}

    public function sendInvitation(Guest $guest)
    {
        Mail::to($guest->email)->send(new GuestInvitation($guest));
    }

    /*public function updateConfirmation($guestId, $status)
    {
        $guest = Guest::find($guestId);
        if ($guest && $guest->user_id == Auth::id()) {
            $guest->rsvp_status = $status;
            $guest->save();
            $this->loadGuests();
        }
    }*/

    public function deleteGuest($guestId)
    {
        // Find and delete the guest based on the ID
        foreach ($this->groupsWithGuestss as $groupKey => $group) {
            foreach ($group['guests'] as $guestKey => $guest) {
                if ($guest['id'] == $guestId) {
                    // Remove the guest from the group
                    unset($this->groupsWithGuestss[$groupKey]['guests'][$guestKey]);
                    
                    // Also delete associated EventRsvp records
                    EventRsvp::where('guest_id', $guestId)
                        //->where('group_id', $this->group_id)  // Ensure you're using the correct group_id if applicable
                        ->delete();
                    break 2;  // Break out of both loops once the guest is found and deleted
                }
            }
        }

        // Optionally, persist changes to the database
        Guest::find($guestId)->delete();

        // Emit an event to notify the UI (optional)
        $this->emit('guestDeleted');
    }

    public function resetForm()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->group_id = null;
        $this->event_id = null;
        $this->rsvp_status = 'Pending';
    }
	

    public function render()
    { 
        return view('livewire.main.account.Guest.guest')->extends('livewire.main.layout.app')->section('content');
    }

    public function switchTab($tab)
    {
        $this->currentTab = $tab;
    }

	public function clearAlert()
    {
        session()->forget('success');
    }

    public function closeModal()
	{
		$this->isModalOpen = false;
	}

}
