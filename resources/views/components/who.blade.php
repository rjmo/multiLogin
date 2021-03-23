@if (Auth::guard('web')->check())
    <p class="text-success">
        you are logged in as a USER
    </p>

@else
    <p  class="text-danger">
        you are logged out as a User
    </p>
@endif

@if (Auth::guard('admin')->check())
    <p class="text-success">
        you are logged in as a Admin
    </p>

@else
    <p class="text-danger">
        you are logged out as a Admin
    </p>
@endif
