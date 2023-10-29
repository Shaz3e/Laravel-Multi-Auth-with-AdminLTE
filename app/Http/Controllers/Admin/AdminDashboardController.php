<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    // View
    protected $view = 'admin.';

    // Route
    protected $route = 'admin';

    public function dashboard()
    {
        return view($this->view . 'dashboard');
    }
}
