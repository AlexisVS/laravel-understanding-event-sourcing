<?php

namespace App\Application\Http\Controllers\Backend\User\Authentication;

use App\Application\Http\Controllers\Controller;
use App\Domain\User\UserAggregatRoot;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
