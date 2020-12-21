<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function fileStorageServe($file) {
        //Перенести пути в конфиг

        // if (!Storage::disk('local')->exists($filePath)){
        //     abort('404');
        // }
        // return response()->file(storage_path('app'.DIRECTORY_SEPARATOR.($filePath)));
        return response()->file(storage_path('/app/private/' . $file));
    }
}
