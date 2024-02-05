<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Providers\Repositories\PhotoRepositoryInterface;

class PhotoController extends Controller
{
    public function getPhoto()
    {
        return view('photo');
    }

    public function postPhoto(ImageRequest $request, PhotoRepositoryInterface $photosRepository)
    {
        //$photosRepository->save($request->image);
         
        return view('photo_ok');
    }
}
