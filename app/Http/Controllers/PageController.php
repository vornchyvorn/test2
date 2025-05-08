<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('page.index');
    }
    public function test(Request $r)
    {
        
        return view('page.test');
    }
    public function register()
    {
        // return view('page.register');
    }
}
