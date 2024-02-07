<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        dd(\App\Models\contact::create ($request->all ()));
      return view('confirm');  
    }
}
