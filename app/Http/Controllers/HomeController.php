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

    public function location() 
    {
        return view('location', [
            'title' => 'Location | Sportouriz'
        ]);
    }

    public function contact() 
    {
        return view('contact', [
            'title' => 'Contact | Sportouriz'
        ]);
    }

    public function payment() 
    {
        return view('payment', [
            'title' => 'Payment | Sportouriz'
        ]);
    }
}
