<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexAction()
    {
        return view('frontend.home');
    }


}
