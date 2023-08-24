<?php

namespace App\UserInterface\web\Backend\User\Authentication\Controllers;

use App\Domain\User\UserAggregatRoot;
use App\Infrastructure\Laravel\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        UserAggregatRoot::retrieve($request->user()->uuid)
            ->updatePassword($validated['password'])
            ->persist();

        return back();
    }
}
