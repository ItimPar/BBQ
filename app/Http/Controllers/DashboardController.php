<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class DashboardController extends Controller
{
    function index()
    {
        //if user is authenticated / session not null
        //Illuminate\Auth\GuardHelpers.php
        if (Auth::check()) {
            return view('dashboard.index');
        }
        else {
            return redirect('login')->with('success','กรุณาเข้าสู่ระบบ');
        }
    }

    function allUser()
    {
        $users = User::all();

        return view('dashboard.user',compact('users'));
    }
}
