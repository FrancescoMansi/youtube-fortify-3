<h1>Pagina di Login</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('login') }}" method="post">
    @csrf
    <input type="text" name="email" id="email">
    <input type="password" name="password" id="password">

    <button type="submit">Accedi</button>
</form>
<hr>
<a href="{{ route('password.request') }}">Password Dimenticata? Clicca qui</a>

<hr>
<a href="{{ route('register') }}">Non sei Registrato? Clicca qui</a>
