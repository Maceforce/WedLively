<div class="container mt-5">
    <h2>My Inquiries</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($inquiries->isEmpty())
        <p>No inquiries available at the moment.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Service</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inquiries as $inquiry)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $inquiry->service->name }}</td>
                        <td>{{ $inquiry->date }}</td>
                        <td>{{ $inquiry->location }}</td>
                        <td>{{ ucfirst($inquiry->status) }}</td>
                        <td>
                            @if ($inquiry->status === 'pending')
                                <button class="btn btn-success" wire:click="acceptInquiry({{ $inquiry->id }})">Accept</button>
                            @else
                                <span class="badge bg-secondary">Accepted</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
