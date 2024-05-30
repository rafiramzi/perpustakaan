<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function login(){
        return view('auth/login_page');
    }

    public function register(){
        return view('auth/register_page');
    }

    public function resetpw(){
        return view('auth/resetpw_page');
    }

    public function landing(){
        return view('userpage/landing_page');
    }

    public function home(){
        return view('userpage/home_page');
    }
    public function formpinjam(){
        return view('userpage/formpinjam_page');
    }
    public function favorite(){
        return view('userpage/favorite_page');
    }
    public function borrow(){
        return view('userpage/borrow_page');
    }
    public function history(){
        return view('userpage/history_page');
    }
    public function desk(){
        return view('userpage/desk_page');
    }
    public function profile(){
        return view('userpage/profile_page');
    }
    public function modalRatings(){
        return view('userpage/modalratings_page');
    }
    public function pencarian(){
        return view('userpage/pencarian_page');
    }

}
