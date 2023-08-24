<?php

declare(strict_types=1);

namespace App\UserInterface\web\Backend\Controllers\Dashboard;

use App\Infrastructure\Laravel\Controller;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Dashboard');
    }
}
