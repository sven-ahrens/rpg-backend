@extends('layout')

@section('content')

    <main class="account">

        <form class="loginarea__form">

            <h1>Login</h1>

            <label class="visuallyhidden" for="username">Username</label>
            <input type="text" name="username" placeholder="Username" />

            <label class="visuallyhidden"  for="password">Email</label>
            <input type="text" name="email" placeholder="Email" />
            <label class="visuallyhidden"  for="password">Password</label>

            <input type="Password" name="password" placeholder="Password" />
            <input type="submit" value="Login">

        </form>

        <div class="loginarea__actions">

            <p>Passwort vergessen? Kein Problem - <a href="#">Jetzt zurücksetzen</a></p>
            <p>Noch nicht registriert? <a href="#">Jetzt registrieren</a></p>

        </div>

    </main>

@endsection
