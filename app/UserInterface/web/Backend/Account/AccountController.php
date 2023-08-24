<?php

declare(strict_types=1);


namespace App\UserInterface\web\Backend\Account;

use App\Infrastructure\Laravel\Controller;
use Inertia\Inertia;
use Inertia\Response;

class AccountController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Account');
    }
}
