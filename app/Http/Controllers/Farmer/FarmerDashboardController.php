<?php

namespace App\Http\Controllers\Farmer;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class FarmerDashboardController extends Controller
{
    /**
     * Display the farmer dashboard.
     */
    public function index(): View
    {
        return view('farmer.dashboard');
    }
}
