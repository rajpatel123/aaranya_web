<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Mail\SendMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function __construct(){
        
        //AUTO SET DARKMODE IN NIGHT
        $darkMode = Session::get('dark_mode') ?? NULL;
        $whiteMode = Session::get('white_mode') ?? NULL;

            if($darkMode != 'Byuser' && $whiteMode != 'Byuser'){
            $now = Carbon::now('Asia/Kolkata');
            $start = 20;        //Darkmode Start time.
            $end = 6;           //Darkmode End time.

            if($now->hour > $end && $now->hour <= $start){
                Session::forget('dark_mode');
            }else{
                Session::put('dark_mode', 'Default');
            }
        }
    }
    public function index()
    {
        $data['title'] = 'Home: Welcome to home page';
        return view('index')->with('data', $data);
    }

    public function bookDemo()
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

    public function setDarkMode()
    {
        Session::put('dark_mode', 'Byuser');
    }

    public function resetDarkMode()
    {
        Session::forget('dark_mode');
        Session::put('white_mode', 'Byuser');
    }

    public function sendMail(Request $request) {
        $mailData = $request->all();
// dd($mailData);
        Mail::send(new SendMail($mailData));
               
            $mail['subject'] = 'New enquiry from ' .  $mailData['company_name'];
            $mail['to'] = 'ranjit.tiwari@aaranyawellness.com';
            // $mail['to'] = 'adroidhordes@gmail.com';
            Mail::send('layout/mail', $mailData, function($message) use($mail) {
               $message->to($mail['to'], 'Ranjeet Tiwari')
               ->subject($mail['subject']);
               $message->from('aaranyaitwork@gmail.com','Aranya Wellness');
               $message->bcc('raj952888@gmail.com', 'Raj Patel');
            });

            return redirect()->back();
     }
}
