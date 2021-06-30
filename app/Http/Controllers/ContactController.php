<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send()
    {
        Mail::to('plingsir2012@gmail.com')->send(new TestMail());
        return view('send');


    }
}
