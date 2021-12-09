<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {

        return view('book-a-demo');
    }
    public function about()
    {

        return view('about');
    }

    public function plans()
    {

        return view('plans');
    }

    public function solution()
    {
        return view('solutions');
    }

    public function setDarkMode(Request $request)
    {
        $request->session()->put('dark_mode', true);
    }

    public function resetDarkMode(Request $request)
    {

        $request->session()->forget('dark_mode');
    }
}
