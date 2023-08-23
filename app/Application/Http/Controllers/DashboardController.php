<?php

declare(strict_types=1);

namespace App\Application\Http\Controllers;

use App\Application\Http\Controllers\Application\Controller;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Dashboard');
    }
}
