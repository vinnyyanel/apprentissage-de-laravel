<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function show($n)
    {
        return view('facture')->withNum($n);
    }
}
