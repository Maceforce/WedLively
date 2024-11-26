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
            @foreach ($guests as $guest)
                <tr>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->email }}</td>
                    <td>{{ $guest->phone }}</td>
                    <td>{{ $guest->rsvp_status }}</td>
                    <td>{{ $guest->meal_choice }}</td>
                    <td>{{ optional($guest->group)->name }}</td>
                    <td>
                        <button class="action-button edit" wire:click="editGuest({{ $guest->id }})">Edit</button>
                        <button class="action-button delete" wire:click="deleteGuest({{ $guest->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
