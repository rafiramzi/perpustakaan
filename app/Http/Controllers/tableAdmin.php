<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tableAdmin extends Controller
{
    public function index() {

        
        return view('admin-table');
    }
}
