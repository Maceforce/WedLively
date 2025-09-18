<div class="guest-container">
    <div class="tabs">
        <button wire:click="switchTab('overview')" class="{{ $currentTab == 'overview' ? 'active' : '' }}">Overview</button>
        <button wire:click="switchTab('wedding')" class="{{ $currentTab == 'wedding' ? 'active' : '' }}">Wedding</button>
        <button wire:click="switchTab('rehearsal')" class="{{ $currentTab == 'rehearsal' ? 'active' : '' }}">Rehearsal Dinner</button>
        <button wire:click="switchTab('shower')" class="{{ $currentTab == 'shower' ? 'active' : '' }}">Shower</button>
        <button wire:click="switchTab('add_event')" class="{{ $currentTab == 'add_event' ? 'active' : '' }}">Add Event</button>
        <button wire:click="switchTab('seating')" class="{{ $currentTab == 'seating' ? 'active' : '' }}">Seating Chart</button>
        <button wire:click="switchTab('meals')" class="{{ $currentTab == 'meals' ? 'active' : '' }}">Track Meals</button>
        <button wire:click="switchTab('menu')" class="{{ $currentTab == 'menu' ? 'active' : '' }}">Menu</button>
        <button wire:click="switchTab('messages')" class="{{ $currentTab == 'messages' ? 'active' : '' }}">Messages</button>
    </div>

    <div class="tab-content">
        @if ($currentTab == 'overview')
            @include('livewire.main.account.guest.tabs.overview')
        @elseif ($currentTab == 'wedding')
            @include('livewire.main.account.guest.tabs.wedding')
        @elseif ($currentTab == 'rehearsal')
            @include('livewire.main.account.guest.tabs.rehearsal')
        @elseif ($currentTab == 'shower')
            @include('livewire.main.account.guest.tabs.shower')
        @elseif ($currentTab == 'add_event')
            @include('livewire.main.account.guest.tabs.add_event')
        @elseif ($currentTab == 'seating')
            @include('livewire.main.account.guest.tabs.seating')
        @elseif ($currentTab == 'meals')
            @include('livewire.main.account.guest.tabs.meals')
        @elseif ($currentTab == 'menu')
            @include('livewire.main.account.guest.tabs.menu')
        @elseif ($currentTab == 'messages')
            @include('livewire.main.account.guest.tabs.messages')
        @endif
    </div>
</div>


<style>
    .tabs {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .tabs button {
        padding: 10px 20px;
        background-color: #f4f4f4;
        color: #333;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    .tabs button:hover {
        background-color: #e2e2e2;
    }

    .tabs button.active {
        background-color: #007bff;
        color: white;
        font-weight: bold;
    }
    
    .tabs button.active {
        background-color: #FFE6B3; 
        color: white; 
        font-weight: bold; 
    }

</style>
