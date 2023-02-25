<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    // Main page
    public function index(){
        return view('web.index');
    }
}
