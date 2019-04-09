<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download($file_name)
    {
          $file_path  = storage_path('app/public/'.$file_name);
          
          return response()->download($file_path); 



    }
    
}
