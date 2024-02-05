<?php
 
namespace App\Providers\Repositories;
 
use Illuminate\Http\UploadedFile;
 
class PhotosRepository implements PhotoRepositoryInterface
{
    public function save(UploadedFile $image)
    {
        $image->store(config('image.path'), 'public');
    }
}