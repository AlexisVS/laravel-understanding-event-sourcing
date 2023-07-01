<?php

declare(strict_types=1);


namespace App\Domain\Account\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class AccountController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Account');
    }
}
