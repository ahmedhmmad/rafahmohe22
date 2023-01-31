<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function dashboard()
   {
       if (Auth::check())
       {
           return view('dashboard.index');
       }
       else
           return redirect('/access-denied');
   }
}
