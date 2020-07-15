<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\Route;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function __invoke(LoginRequest $request): RedirectResponse
    {
        $user = User::firstWhere('email', $request->email);

        if (!$user) {
            return Route::backWithError(
                $request->except('password'),
                ['wrong_email' => 'Dieser Account konnte nicht gefunden werden.']
            );
        }

        $isUser = Auth::attempt($request->only(['email', 'password']), true);

        if (!$isUser) {
            return Route::backWithError(
                $request->except('password'),
                ['wrong_password' => 'Falsches Passwort.']
            );
        }

        return redirect()->to('/');
    }
}
