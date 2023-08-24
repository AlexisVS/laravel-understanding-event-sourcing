<?php

namespace App\UserInterface\web\Backend\Controllers\User\Anthentication;

use App\Application\Providers\RouteServiceProvider;
use App\Domain\User\UserAggregatRoot;
use App\Infrastructure\Laravel\Controller;
use App\Infrastructure\Laravel\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $userUuid = Str::uuid()->toString();

        $attributes = array_merge($request->only('name', 'email', 'password'), ['uuid' => $userUuid]);

        (new UserAggregatRoot())
            ->register($attributes)
            ->persist();

        $user = (new User)->where('uuid', $userUuid)->firstOrFail();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with('success', 'Your account has been created.');
    }
}
