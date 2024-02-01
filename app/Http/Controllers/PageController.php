<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function registration(){
        return view('auth.registration');
    }

    public function siswa(){
        return view('page.siswa');
    }
}
