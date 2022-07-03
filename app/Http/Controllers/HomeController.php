<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('index', [
            'title' => 'Home | Sportouriz'
        ]);
    }

    public function schedule() 
    {
        return view('schedule', [
            'title' => 'Schedule | Sportouriz'
        ]);
    }
}
