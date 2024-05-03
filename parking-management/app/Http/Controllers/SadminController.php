<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SadminController extends Controller
{
    public function SadminDashboard(){
        return view("sadmin.sadmin_dashboard");
    } //end method
}
