<?php

declare(strict_types=1);

namespace App\UserInterface\web\Frontend\Home\Controllers;

use App\Infrastructure\Laravel\Controller;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
}
