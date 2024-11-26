<div class="guest-container">
    <div class="tabs">
        <button wire:click="switchTab('overview')" class="<?php echo e($currentTab == 'overview' ? 'active' : ''); ?>">Overview</button>
        <button wire:click="switchTab('wedding')" class="<?php echo e($currentTab == 'wedding' ? 'active' : ''); ?>">Wedding</button>
        <button wire:click="switchTab('rehearsal')" class="<?php echo e($currentTab == 'rehearsal' ? 'active' : ''); ?>">Rehearsal Dinner</button>
        <button wire:click="switchTab('shower')" class="<?php echo e($currentTab == 'shower' ? 'active' : ''); ?>">Shower</button>
        <button wire:click="switchTab('add_event')" class="<?php echo e($currentTab == 'add_event' ? 'active' : ''); ?>">Add Event</button>
        <button wire:click="switchTab('seating')" class="<?php echo e($currentTab == 'seating' ? 'active' : ''); ?>">Seating Chart</button>
        <button wire:click="switchTab('meals')" class="<?php echo e($currentTab == 'meals' ? 'active' : ''); ?>">Track Meals</button>
        <button wire:click="switchTab('menu')" class="<?php echo e($currentTab == 'menu' ? 'active' : ''); ?>">Menu</button>
        <button wire:click="switchTab('messages')" class="<?php echo e($currentTab == 'messages' ? 'active' : ''); ?>">Messages</button>
    </div>

    <div class="tab-content">
        <?php if($currentTab == 'overview'): ?>
            <?php echo $__env->make('livewire.main.account.guest.tabs.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($currentTab == 'wedding'): ?>
            <?php echo $__env->make('livewire.main.account.guest.tabs.wedding', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($currentTab == 'rehearsal'): ?>
            <?php echo $__env->make('livewire.main.account.guest.tabs.rehearsal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($currentTab == 'shower'): ?>
            <?php echo $__env->make('livewire.main.account.guest.tabs.shower', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($currentTab == 'add_event'): ?>
            <?php echo $__env->make('livewire.main.account.guest.tabs.add_event', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($currentTab == 'seating'): ?>
            <?php echo $__env->make('livewire.main.account.guest.tabs.seating', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($currentTab == 'meals'): ?>
            <?php echo $__env->make('livewire.main.account.guest.tabs.meals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($currentTab == 'menu'): ?>
            <?php echo $__env->make('livewire.main.account.guest.tabs.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($currentTab == 'messages'): ?>
            <?php echo $__env->make('livewire.main.account.guest.tabs.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
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
<?php /**PATH C:\xampp\htdocs\freeluncer\resources\views/livewire/main/account/guest/overview.blade.php ENDPATH**/ ?>