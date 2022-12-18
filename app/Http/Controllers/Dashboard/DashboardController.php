<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function adminDashboard(){
        return view('dashboard.admin');
    }

    public function customerDashboard(){
        return view('dashboard.customer');
    }
}
