<?php

namespace App\Http\Controllers\User;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Mail\Admin\BecomeAnIb as AdminBecomeAnIb;
use App\Mail\NewTradingAccount;
use App\Mail\User\BecomeAnIb;
use App\Models\AccountTypes;
use App\Models\IbClients;
use App\Models\KycDocuments;
use App\Models\Ledgers;
use App\Models\Leverages;
use App\Models\TradingAccounts;
use App\Models\User;
use App\Models\Wallets;
use Illuminate\Http\Request;
use CMT5Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserDashboardController extends Controller
{
    // View Folder
    protected $view = 'user.';

    public function dashboard(Request $request)
    {
        return view($this->view . 'dashboard');
    }
}
