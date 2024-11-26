<?php

namespace App\Http\Livewire\Main\Account\Guest;

use App;
use App\Models\Guest;
use App\Models\Group;
use App\Models\Event;
use App\Models\RelatedGuest;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Services\CometChatService;
use Http;  


class GuestComponent extends Component
{
    public $guests = [];
    public $groups = [];
    public $events = [];
    public $relatedGuests = [];
    public $currentTab = 'overview';

    //public $cometChat;

    protected $appId;
    protected $apiKey;
    protected $region;
    protected $authkey;   
    protected $baseUrl;  

    protected $cometChat;

    public function mount($guestId = null)
    {
        $this->loadGuests();
        $this->groups = Group::where('user_id', Auth::id())->get();
        $this->events = Event::where('user_id', Auth::id())->get();

        $this->guests = Guest::where('user_id', Auth::id())->get();
        $this->cometChat = App::make(CometChatService::class);
        //$this->cometChat = $cometChat;

         $cometChatService = new CometChatService();
         //$response = $cometChatService->sendMessage("this is a test message", "cometchat-uid-1");

        // $users = $cometChatService->getUsers(100, 1);  //Working well

        // Add New User
        $uid = 'user123';
        $name = 'John Doe';
        $avatar = 'https://example.com/avatar.jpg'; 
        $link = 'https://example.com/profile'; 
        $role = 'default'; 
        $metadata = [
            'location' => 'New Delhi',
            'email' => 'johndoe@example.com',
            '@private' => [
                'email' => 'johndoe@example.com',
                'contactNumber' => '1234567890', 
            ]
        ];
        $tags = ['tag1', 'tag2']; 
        $withAuthToken = true;

        //$responsecreateUser = $cometChatService->createUser($uid, $name, $avatar, $link, $role, $metadata, $tags, $withAuthToken); //Working Well
        //echo json_encode($responsecreateUser, JSON_PRETTY_PRINT);
        
        // echo '<pre>';
        // print_r($responsecreateUser);
        // echo '</pre>';
        // die();  
        
        //// Update User
        $uid = 'user123';
        $name = 'John Updated Doe';
        $avatar = 'https://example.com/new-avatar.jpg';
        $link = 'https://example.com/new-profile';
        $role = 'default';
        $metadata = [
            'location' => 'New Delhi',
            '@private' => [
                'email' => 'john.updated@example.com',
                'contactNumber' => '9876543210',
            ]
        ];
        $tags = ['updated_tag1', 'updated_tag2'];
        $unset = ['old_tag1', 'old_tag2']; // Example of tags or fields to remove

        $responseUpdatedUser = $cometChatService->updateUser($uid, $name, $avatar, $link, $role, $metadata, $tags, $unset); //Working Well
        //echo json_encode($responseUpdatedUser, JSON_PRETTY_PRINT);

        //Delete user
        $uid = 'user123'; 
        $permanent = true; 

        //$response = $cometChatService->deleteUser($uid, $permanent); //Working Well
        //echo json_encode($response, JSON_PRETTY_PRINT);

        $uidsToDeactivate = ['user123']; // List of user IDs to deactivate

        //$responseDeactivateUsers = $cometChatService->deactivateUsers($uidsToDeactivate); //Working Well
        //echo json_encode($responseDeactivateUsers, JSON_PRETTY_PRINT);

        $uidsToActivate = ['user123']; // List of user IDs to reactivate

        //$responseReactivateUsers = $cometChatService->reactivateUsers($uidsToActivate); //Working Well
        //echo json_encode($response, JSON_PRETTY_PRINT);

        //Get single user
        $uid = 'user123'; // Replace with the user ID you want to retrieve
        //$getUserresponse = $cometChatService->getUser($uid);
        //echo json_encode($response, JSON_PRETTY_PRINT);

        $groupData = [
            'guid' => 'group123', // Unique group ID
            'name' => 'Study Group', // Group name
            'type' => 'private', // Group type (public, private, or password-protected)
            'password' => 'password123', // Only required if type is password-protected
            'icon' => 'https://example.com/group-icon.png', // URL for group icon
            'description' => 'A group for study discussions',
            'metadata' => [
                'topic' => 'Physics',
            ],
            'owner' => 'user123', // Owner UID
            'tags' => ['study', 'education'],
            'members' => [
                'admins' => ['admin1', 'admin2'],
                'moderators' => ['mod1'],
                'participants' => ['user456', 'user789'],
                'usersToBan' => ['bannedUser1']
            ],
        ];
        
        //$createGroupresponse = $cometChatService->createGroup($groupData); //Working Well
        // echo json_encode($createGroupresponse, JSON_PRETTY_PRINT);

        $listGroupsresponse = $cometChatService->listGroups(); //Working well
        //echo json_encode($listGroupsresponse, JSON_PRETTY_PRINT);   
        
        $guid = 'group123'; // Replace with the group ID you want to retrieve
       // $getGroupDetailsresponse = $cometChatService->getGroupDetails($guid); //Working Well
        //echo json_encode($getGroupDetailsresponse, JSON_PRETTY_PRINT);

        //Update group
        $guid = 'group123'; // Replace with the group ID you want to update
        $data = [
            'name' => 'New Group Name',
            'type' => 'public', // "public" or "private" depending on group type
            'password' => 'newpassword', // Only if the group type is protected
            'icon' => 'https://example.com/icon.png',
            'description' => 'Updated group description',
            'metadata' => [
                'key1' => 'value1',
                'key2' => 'value2',
            ],
            'owner' => 'new-owner-uid',
            'tags' => ['tag1', 'tag2'],
            'unset' => ['password', 'icon'], // Specify fields to be removed
        ];

        //$response = $cometChatService->updateGroupDetails($guid, $data); // Working Well
        //echo json_encode($response, JSON_PRETTY_PRINT);

        //Delete Group
       // $guid = 'group123'; 
        //$deleteGroupresponse = $cometChatService->deleteGroup($guid); //Working well
        //echo json_encode($deleteGroupresponse, JSON_PRETTY_PRINT);



        // echo '<pre>';
        // print_r($getGroupDetailsresponse);
        // echo '</pre>';
        // die();  

    }


    public function sendMessageToUser()
    {
        $response = $this->cometChat->sendMessage('Hello, User!', 'cometchat-uid-1');
        return response()->json($response);
    }

    public function addRelatedGuest()
    {
        $this->relatedGuests[] = ['first_name' => '', 'last_name' => '', 'relationship' => ''];
    }

    public function removeRelatedGuest($index)
    {
        unset($this->relatedGuests[$index]);
        $this->relatedGuests = array_values($this->relatedGuests); // Reindex array
    }

    public function saveGuest()
    {
        // echo '<pre>';
        // print_r($this->guest);
        // echo '</pre>';
        // die("test");
        $this->validate([
            'guest.first_name' => 'required|min:2',
            'guest.email' => 'email',
        ]);
        
        $guest = Guest::updateOrCreate(['id' => $this->guest['id'] ?? null], $this->guest);
        
        $guest->relatedGuests()->delete(); // Clear old related guests
        foreach ($this->relatedGuests as $related) {
            $guest->relatedGuests()->create($related);
        }

        session()->flash('message', 'Guest saved successfully');
    }

    public function loadGuests()
    {
        $this->guests = Guest::where('user_id', Auth::id())->get();
    }    

    public function render()
    {
        return view('livewire.main.account.guest.guest')->extends('livewire.main.layout.app')->section('content');
    }

    public function switchTab($tab)
    {
        $this->currentTab = $tab;
    }
}