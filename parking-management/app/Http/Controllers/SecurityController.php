<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function SecurityDashboard(){
        return view("security.index");
    } //end method
}
