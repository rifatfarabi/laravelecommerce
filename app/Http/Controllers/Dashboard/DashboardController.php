<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{

    public function adminDashboard(){
        return view('dashboard.admin');
    }

    public function customerDashboard(){
        abort_if(Auth::user()->role != "customer", Response::HTTP_FORBIDDEN, "Not Authorized");
        return view('dashboard.customer');
    }
}
