<div> 
<div class="navbar">
    <nav class="relative container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 justify-between items-center h-20 flex">
    <!-- <nav class="navbar"> -->
        <ul class="nav-menu">
            <li><a href="my-wedding">My Wedding</a></li>
            <li><a href="checklist">Checklist</a></li>
            <li><a href="vendor-manager">Vendor Manager</a></li>
            <li><a href="guest">Guest List</a></li>
            <li><a href="seating-chart">Seating Chart</a></li>
            <li><a href="budget">Budget</a></li>
            <li><a href="registry">Registry</a></li>
            <li><a href="wedding-website">Wedding Website</a></li>
        </ul>
    </nav>
</div>
<h1 class="tools-subtitle">Checklist</h1>
<div id="successMessage" class="success-message" style="display: none;">Task added successfully!</div>   
<!-- <div class="pb">
    <a id="openModalBtn" class="btn-primary bpop">Add New Task</a>
</div> -->

<div id="taskModal" class="modalf">
    <div class="modal-content">
        <span class="close" id="closeModalBtn">&times;</span>
        <form wire:submit.prevent="addTask" class="task-form">
    <h1 class="form-title">Add New Task</h1>
    <div class="form-group">
        <input type="text" wire:model="newTask.title" class="form-input" placeholder="Add a new task">
        <?php $__errorArgs = ['newTask.title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <textarea wire:model="newTask.description" class="form-textarea" rows="2" placeholder="Description of task"></textarea>
        <?php $__errorArgs = ['newTask.description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <input wire:model="newTask.due_date" type="date" class="form-input">
        <?php $__errorArgs = ['newTask.due_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <select wire:model="newTask.category" class="form-select">
            <option value="">Select a category</option>
            <option value="Engagement">Engagement</option>           
        </select>
        <?php $__errorArgs = ['newTask.category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <button type="submit" class="btn-primary">Create</button>    
</form>
    </div>
</div>


<div class="tasklist">
<ul class="task-list">
    <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li <?php if($task->completed): ?> style="text-decoration: line-through;" <?php endif; ?>>
    <div style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap; max-width: 100%;">
        <!-- Checkbox -->
        <div>
            <input type="checkbox" 
                   wire:model="tasks.<?php echo e($loop->index); ?>.completed" 
                   wire:change="toggleCompletion(<?php echo e($task->id); ?>)"
                   <?php echo e($task->completed ? 'checked' : ''); ?>>
        </div>

        <!-- Task Title with Heading -->
        <div style="flex: 1;">
            <strong>Task:</strong> <?php echo e($task->title); ?>

        </div>

        <!-- Task Description with Heading -->
        <div style="flex: 2;">
            <strong>Description:</strong> <?php echo e($task->description); ?>

        </div>

        <!-- Task Category with Heading -->
        <div style="flex: 1;">
            <strong>Category:</strong> <?php echo e($task->category); ?>

        </div>

        <!-- Due Date with Heading -->
        <div style="flex: 1;">
            <strong>Due Date:</strong> <?php echo e($task->due_date); ?>

        </div>

        <!-- Delete Button -->
        <div>
            <button wire:click="deleteTask(<?php echo e($task->id); ?>)" class="ml-2 text-red-600">Delete</button>
        </div>
    </div>
</li>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <li>No records</li>
    <?php endif; ?>
</ul>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        //$('#taskModal').hide();
        
        // $('.bpop').on('click', function() {
        //     $('#taskModal').show();
        // });

       
        // $('#closeModalBtn').on('click', function() {
        //     $('#taskModal').hide();
        // });
        
        // $(window).on('click', function(event) {
        //     if ($(event.target).is('#taskModal')) {
        //         $('#taskModal').fadeOut();
        //     }
        // });

        // Close Modal with Escape key
        // $(document).on('keydown', function(event) {
        //     if (event.key === "Escape") {
        //         $('#taskModal').fadeOut();
        //     }
        // });

        // Prevent fade out on interaction with input fields
        // $('.modal-content').on('click', function(event) {
        //     event.stopPropagation(); 
        // });

        $('.task-form button.btn-primary').click(function() {
            $('#successMessage').fadeIn(500).delay(8000).hide(500);
            //$('#taskModal').hide();
        });
    });
</script>

</div><?php /**PATH C:\xampp\htdocs\freeluncer\resources\views/livewire/main/account/checklist/checklist.blade.php ENDPATH**/ ?>