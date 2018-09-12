<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function ajaxRequestGetData()
    {
        return view('auth.admin.getTableData');
    }

    public function ajaxRequestAddRow()
    {
        return view('auth.admin.addTableRow');
    }

    public function ajaxRequestDeleteRow()
    {
        return view('auth.admin.deleteTableRow');
    }

    public function ajaxRequestEditRow()
    {
        return view('auth.admin.editTableRow');
    }
}
