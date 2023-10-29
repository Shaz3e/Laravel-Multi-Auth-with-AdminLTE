<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    // View Folder
    protected $view = 'admin.';

    public function dashboard()
    {
        return view($this->view . 'dashboard');
    }
}
