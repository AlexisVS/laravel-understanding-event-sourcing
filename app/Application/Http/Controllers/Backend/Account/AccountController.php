<?php

declare(strict_types=1);


namespace App\Application\Http\Controllers\Backend\Account;

use App\Application\Http\Controllers\Application\Controller;
use Inertia\Inertia;
use Inertia\Response;

class AccountController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Account');
    }
}
