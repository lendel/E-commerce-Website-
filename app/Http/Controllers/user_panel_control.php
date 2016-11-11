<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_panel_control extends Controller
{
    public function index()
    {
      return view('user_panel.index');
    }

    public function login_page()
    {

    	return view('Admin_panel.index');
    }
}
