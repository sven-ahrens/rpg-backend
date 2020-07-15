@extends('layout')

@section('content')

    <main class="login">

        <form class="loginarea__form" method="POST" action="/login">

            <h1>Login</h1>

            <label class="visuallyhidden"  for="email">Email</label>
            <input id="email" type="text" name="email" placeholder="Email" />

            <label class="visuallyhidden"  for="password">Password</label>
            <input id="password" type="Password" name="password" placeholder="Password" />

            <input type="submit" value="Login">

        </form>

        <div class="loginarea__actions">

            <p>Passwort vergessen? Kein Problem - <a href="#">Jetzt zurücksetzen</a></p>
            <p>Noch nicht registriert? <a href="#">Jetzt registrieren</a></p>

        </div>

    </main>

@endsection
