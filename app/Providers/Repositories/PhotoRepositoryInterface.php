<?php
 
namespace App\Providers\Repositories;
 
use Illuminate\Http\UploadedFile;
 
interface PhotoRepositoryInterface
{
  public function save(UploadedFile $image);
}