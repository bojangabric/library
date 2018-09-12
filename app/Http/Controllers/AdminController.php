<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('auth.admin.dashboard');
    }

    public function tables()
    {
        $data = \App\User::all();
        return view('auth.admin.tables')->withData($data);
    }
}
