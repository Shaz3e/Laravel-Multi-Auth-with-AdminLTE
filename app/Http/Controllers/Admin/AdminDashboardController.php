<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\LoginHistory;
use App\Http\Controllers\Controller;
use App\Models\AccountTypes;
use App\Models\IbClients;
use App\Models\Ledgers;
use App\Models\TradingAccounts;
use App\Models\User;
use CMT5Request;

class AdminDashboardController extends Controller
{
    // View Folder
    protected $view = 'admin.';

    public function dashboard()
    {
        return view($this->view . 'dashboard');
    }
}
