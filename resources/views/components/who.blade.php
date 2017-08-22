@if(Auth::guard('web')->check())
    <p class="text-success">
        Hello my dearest <strong>USER</strong>
    </p>
@endif

@if(Auth::guard('admin')->check())
    <p class="text-success">
        Hello my dearest <strong>ADMIN</strong>
    </p>
@endif
