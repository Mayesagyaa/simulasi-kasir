<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('layouts.dashboard');
    }

    function petugas()
    {
        return view('layouts.petugas');
    }
    
}
    