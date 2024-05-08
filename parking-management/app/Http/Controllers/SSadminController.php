<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SsadminController extends Controller
{
    public function SsadminDashboard(){
        return view("ssadmin.index");
    } //end method
}
