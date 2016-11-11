<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_panel_control extends Controller
{
    public function System_vaild()
    {return view('Admin_panel.index');
    }

    public function Company_inforamtion()
    {
      return view('Admin_panel.Admin_panel_sub_page.Company_details');
    }
}
