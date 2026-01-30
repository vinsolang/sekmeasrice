<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(){   
        $showAdmin = DB::table('users')->get(); // or ->where('id', Auth::id())->get();
        return view('backend.admin', compact('showAdmin'));
    }
}
