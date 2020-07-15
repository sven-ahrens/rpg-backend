<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Services\Route;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

/**
 * Class SignupController
 * @package App\Http\Controllers
 */
class SignupController extends Controller
{
    /**
     * @param SignupRequest $request
     * @return RedirectResponse
     */
    public function __invoke(SignupRequest $request): RedirectResponse
    {
        $inputs = $request->all();

        $inputs['password'] = Hash::make($request->input('password'));

        $user = User::create($inputs);

        if (!$user) {
            return Route::backWithError(
                $request->except('password'),
                ['could_not_create_user' => 'Benutzer konnte nicht erstellt werden']
            );
        }

        return redirect()->to('/login');
    }
}
