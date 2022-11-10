<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('Admin_dashboard');
    }
}
