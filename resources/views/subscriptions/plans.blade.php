
<div class="container">
    <h2>Subscription Plans</h2>
    <div class="card">
        <div class="card-header">
            Premium Plan
        </div>
        <div class="card-body">
            <h5 class="card-title">$9.99/month</h5>
            <p class="card-text">Get access to premium features including enhanced profile visibility, featured listings, and priority search results.</p>
            <form action="{{ route('subscribe.premium') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Subscribe to Premium</button>
            </form>
        </div>
    </div>
</div>

