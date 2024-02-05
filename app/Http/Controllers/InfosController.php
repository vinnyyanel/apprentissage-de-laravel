<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfosController extends Controller
{
   public function getInfos()
   {
    return view('infos');
   }
   public function postInfos(request $request)
   {
    return 'le nom est'.$request->input('nom');
   }
}
