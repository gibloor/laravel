<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index() {
        return view('index');
    }
    
    function payment() {
        return view('payment.index');
    }
}
