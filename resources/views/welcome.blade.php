<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Fortify</title>
</head>

<body>
    <h1>Area Riservata</h1>
    <hr>
    Benvenuto, {{ Auth::user()->name }}

    <hr>
    <form action="{{ route('logout') }}" method="post">
        @csrf

        <button type="submit">Logout</button>
    </form>
    <hr>

    <h2>Modifica Informazioni Base</h2>
    <form action="{{ route('user-profile-information.update') }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="name" value="{{ auth()->user()->name }}">
        {{ $errors->updateProfileInformation->first('name') ?? '' }}

        <input type="email" name="email" id="email" value="{{ auth()->user()->email }}">
        {{ $errors->updateProfileInformation->first('email') ?? '' }}

        <button type="submit">Aggiorna Dati</button>
    </form>
    <hr>

    <h2>Aggiornamento Password</h2>
    <form action="{{ route('user-password.update') }}" method="post">
        @csrf
        @method('PUT')
        <input type="password" name="current_password" id="current_password">
        {{ $errors->updatePassword->first('current_password') ?? '' }}

        <input type="password" name="password" id="password">
        {{ $errors->updatePassword->first('password') ?? '' }}

        <input type="password" name="password_confirmation" id="password_confirmation">
        {{ $errors->updatePassword->first('password_confirmation') ?? '' }}
        <button type="submit">Aggiorna Password</button>
    </form>
</body>

</html>
