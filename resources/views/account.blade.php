@extends('layout')

@section('content')

    <main class="account">

        <form class="signuparea__form" method="POST" action="/account/creation">

            @if ($errors->any())
                <div class="errors">
                <span class="errors_message">
                    {{ $errors->first() }}
                </span>
                </div>
            @endif

            @csrf

            <h1>Sign up</h1>

            <label class="visuallyhidden" for="username">Username</label>
            <input id="username" type="text" name="username" placeholder="Username" value="{{ old('username') }}"/>

            <label class="visuallyhidden"  for="email">Email</label>
            <input id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}"/>

            <label class="visuallyhidden"  for="password">Password</label>
            <input id="password" type="Password" name="password" placeholder="Password" />

            <input type="submit" value="Login">

        </form>

    </main>

@endsection
