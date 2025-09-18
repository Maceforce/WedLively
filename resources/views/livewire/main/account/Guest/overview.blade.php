<div class="guest-container">
    <div class="tabs px-3">
        <!--<button wire:click="switchTab('overview')" class="inline-flex items-center justify-center rounded-sm border border-black bg-gray-800 px-4 py-2 font-medium text-white hover:text-gray-800 focus:text-gray-800 hover:bg-transparent transition-colors duration-300 {{ $currentTab == 'overview' ? 'active' : '' }}">Overview</button>
        <button wire:click="switchTab('wedding')" class="{{ $currentTab == 'wedding' ? 'active' : '' }}">Wedding</button>
        <button wire:click="switchTab('rehearsal')" class="{{ $currentTab == 'rehearsal' ? 'active' : '' }}">Rehearsal Dinner</button>
        <button wire:click="switchTab('shower')" class="{{ $currentTab == 'shower' ? 'active' : '' }}">Shower</button>-->
        <!--<button wire:click="switchTab('add_event')" class="{{ $currentTab == 'add_event' ? 'active' : '' }}">Add Event</button>
        <button wire:click="switchTab('seating')" class="{{ $currentTab == 'seating' ? 'active' : '' }}">Seating Chart</button>
        <button wire:click="switchTab('meals')" class="{{ $currentTab == 'meals' ? 'active' : '' }}">Track Meals</button>
        <button wire:click="switchTab('menu')" class="{{ $currentTab == 'menu' ? 'active' : '' }}">Menu</button>
        <button wire:click="switchTab('messages')" class="{{ $currentTab == 'messages' ? 'active' : '' }}">Messages</button>-->
    </div>
	
	 <div class="tab-content">
		 
        <!-- @if ($currentTab == 'overview') -->
            @include('livewire.main.account.Guest.tabs.overview')
       <!-- @elseif ($currentTab == 'wedding')
            @include('livewire.main.account.Guest.tabs.wedding')
        @elseif ($currentTab == 'rehearsal')
            @include('livewire.main.account.Guest.tabs.rehearsal')
        @elseif ($currentTab == 'shower')
            @include('livewire.main.account.Guest.tabs.shower')
        @elseif ($currentTab == 'add_event')
            @include('livewire.main.account.Guest.tabs.add_event')
        @elseif ($currentTab == 'seating')
            @include('livewire.main.account.Guest.tabs.seating')
        @elseif ($currentTab == 'meals')
            @include('livewire.main.account.Guest.tabs.meals')
        @elseif ($currentTab == 'menu')
            @include('livewire.main.account.Guest.tabs.menu')
        @elseif ($currentTab == 'messages')
            @include('livewire.main.account.Guest.tabs.messages')
        @endif-->
    </div>

   
</div>


<style>
 /*   .tabs {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 0px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }*/

</style>
