@if (session('status') == 'verification-link-sent')
    <div>
        A new email verification link has been emailed to you!
    </div>
@endif

<form action="{{ route('verification.send') }}" method="post">
    @csrf
    <button type="submit">Reinvia Email</button>
</form>
<hr>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
