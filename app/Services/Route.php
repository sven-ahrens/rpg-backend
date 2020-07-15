<?php

namespace App\Services;

use Illuminate\Http\RedirectResponse;

class Route
{
    /**
     * @param array $inputs
     * @param array $errors
     * @return RedirectResponse
     */
    public static function backWithError(array $inputs, array $errors): RedirectResponse
    {
        return redirect()
            ->back()
            ->withInput($inputs)
            ->withErrors($errors);
    }
}
