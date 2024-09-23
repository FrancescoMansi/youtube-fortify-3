<h1>Registrati Qui</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('register') }}" method="post">
    @csrf
    <input type="text" name="name" id="name">
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    <input type="password" name="password_confirmation" id="password_confirmation">

    <button type="submit">Registrati</button>
</form>
<a href="{{ route('login') }}">Gia registrato? Clicca qui</a>
