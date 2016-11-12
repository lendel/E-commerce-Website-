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
    public function Payment_method()
    {
      return view('Admin_panel.Admin_panel_sub_page.Payment_method');

    }
    public function category_setup()
    {
      return view('Admin_panel.Admin_panel_sub_page.category_setup');
    }
    public function Brand_setup()
    {
      return view('Admin_panel.Admin_panel_sub_page.Brand_setup');
    }
}
