@if(Auth::check() && Auth::user()->account_type == 'buyer')
    <div class="navbar">
        <nav class="relative container mx-auto px-4 sm:px-6 lg:px-8 justify-center items-center h-20 flex">
            <ul class="nav-menu gap-2 flex justify-center">
                <li><a class="whitespace-nowrap border border-white" href="{{url('account/checklist')}}">Checklist</a></li>
                <li><a class="whitespace-nowrap border border-white" href="{{url('account/guest')}}">Guest List</a></li>
                <li><a class="whitespace-nowrap border border-white" href="{{url('account/budget')}}">Budget</a></li>
            </ul>
        </nav>
    </div>
@endif