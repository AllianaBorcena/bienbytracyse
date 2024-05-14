<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function store() {
        return 'none';
    }
}
