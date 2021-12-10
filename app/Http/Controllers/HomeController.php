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
        $data['title'] = 'Book Demo';
        return view('book-a-demo')->with('data', $data);
    }
    public function about()
    {
        $data['title'] = 'About';
        return view('about')->with('data', $data);
    }

    public function plans()
    {
        $data['title'] = 'Plans';
        return view('plans')->with('data', $data);
    }

    public function solution()
    {
        $data['title'] = 'Solutions';
        return view('solutions')->with('data', $data);
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
