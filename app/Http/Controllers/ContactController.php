<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getForm()
    {
        return view('contact');
    }

    public function postForm(ContactRequest $request)
    {
        Mail::to('assembeenghot@gmail.com')
        ->send(new contact($request->except('_token')));  
      return view('confirm');  
    }
}
