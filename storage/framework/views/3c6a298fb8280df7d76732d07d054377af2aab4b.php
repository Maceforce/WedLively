<div class="budget-container">


<!-- <div class="navbar">
    <nav class="relative container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 justify-between items-center h-20 flex">
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
<h1 class="tools-subtitle">Checklist</h1> -->

    <div class="budget-form">
        <h1>Add New Budget</h1>
        <form wire:submit.prevent="addBudget">
            <div class="form-group">
                <input type="text" wire:model="newBudget.category" placeholder="Budget Category">
                <?php $__errorArgs = ['newBudget.category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <input type="number" wire:model="newBudget.amount" placeholder="Amount" min="0">
                <?php $__errorArgs = ['newBudget.amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-submit">Add Budget</button>
            </div>
        </form>
    </div>

    <div class="existing-budgets">
        <h2>Existing Budgets</h2>
        <ul>
            <?php $__empty_1 = true; $__currentLoopData = $budgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $budget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="budget-item">
                    <strong><?php echo e($budget->category); ?></strong> - 
                    <span>$<?php echo e(number_format($budget->amount, 2)); ?></span>
                    <button wire:click="deleteBudget(<?php echo e($budget->id); ?>)" class="btn-delete">Delete</button>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li>No budgets available</li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<style>
    .budget-container {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        background-color: #FFF6D8;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .budget-form {
        width: 45%;
        padding: 20px;
        background-color: #FF8080;
        border-radius: 8px;
        color: black;
        height: 245px;
    }

    .existing-budgets {
        width: 45%;
        padding: 20px;
        background-color: #FF8080;
        border-radius: 8px;
        color: black;
    }

    h1, h2 {
        margin-bottom: 15px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    input[type="text"], input[type="number"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn-submit {
        padding: 10px 15px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #444;
    }

    .budget-item {
        margin-bottom: 10px;
        background-color: #FFF;
        padding: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
    }

    .btn-delete {
        padding: 5px 10px;
        background-color: #FF4444;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-delete:hover {
        background-color: #FF0000;
    }
</style>
<?php /**PATH C:\xampp\htdocs\freeluncer\resources\views/livewire/main/account/budget/budget.blade.php ENDPATH**/ ?>