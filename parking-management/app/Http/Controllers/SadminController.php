<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SadminController extends Controller
{
    public function SadminDashboard(){
        return view("sadmin.index");
    } //end method
}
