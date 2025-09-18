<style>
.guest-overview {
    margin: 20px auto;
}

.guest-overview h2 {
    text-align: center;
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background-color: #FF8080;
    color: white;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {
    background-color: #f1f1f1;
}

.action-button {
    padding: 8px 12px;
    margin-right: 5px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.action-button.edit {
    background-color: #28a745;
    color: white;
}

.action-button.edit:hover {
    background-color: #218838;
}

.action-button.delete {
    background-color: #dc3545;
    color: white;
}

.action-button.delete:hover {
    background-color: #c82333;
}

</style>


<div class="guest-overview">
    <h2>All Guests</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>RSVP Status</th>
                <th>Meal Choice</th>
                <th>Group</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $guests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($guest->name); ?></td>
                    <td><?php echo e($guest->email); ?></td>
                    <td><?php echo e($guest->phone); ?></td>
                    <td><?php echo e($guest->rsvp_status); ?></td>
                    <td><?php echo e($guest->meal_choice); ?></td>
                    <td><?php echo e(optional($guest->group)->name); ?></td>
                    <td>
                        <button class="action-button edit" wire:click="editGuest(<?php echo e($guest->id); ?>)">Edit</button>
                        <button class="action-button delete" wire:click="deleteGuest(<?php echo e($guest->id); ?>)">Delete</button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\freeluncer\resources\views/livewire/main/account/Guest/guest-list.blade.php ENDPATH**/ ?>