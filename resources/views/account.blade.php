@extends('layout')

@section('content')

    <main class="account">

        <form class="signuparea__form" method="POST" action="/account/creation">

            <h1>Sign up</h1>

            <label class="visuallyhidden" for="username">Username</label>
            <input id="username" type="text" name="username" placeholder="Username" />

            <label class="visuallyhidden"  for="email">Email</label>
            <input id="email" type="text" name="email" placeholder="Email" />

            <label class="visuallyhidden"  for="password">Password</label>
            <input id="password" type="Password" name="password" placeholder="Password" />

            <input type="submit" value="Login">

        </form>

    </main>

@endsection
