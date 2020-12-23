<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    static function fileStorageServe(string $file) {
        //Перенести пути в конфиг

        // if (!Storage::disk('local')->exists($filePath)){
        //     abort('404');
        // }
        // return response()->file(storage_path('app'.DIRECTORY_SEPARATOR.($filePath)));
        // return response()->file(storage_path('/app/private/' . $file));
        return response()->file(storage_path(config('filestorage.private.path') . $file));
    }


    /**
     * Get url for saved file
     *
     * @param  string $path
     * @param  Illuminate\Http\UploadedFile $file
     * @param  string $disk = 'public'
     * @return $url
     */
    public static function fileStorage(string $path, UploadedFile $file, string $disk = 'public')
    {
        if($file != null) {
            $url = Storage::disk($disk)->put($path, $file);
        } else {
            return response()->json(array(
                'code'      =>  404,
                'message'   =>  'No have image'
            ), 404);
        }

        return $url;
        // if($request->hasfile('image')) {
        //     $url = Storage::disk('private')->put('images/master', $file);
        // }
    }

    static function filesStorage(string $path, UploadedFile $file)
    {
        # code...
    }

    /**
     * Delete saved file
     *
     * @param  string $disk = 'public'
     * @param  string $path
     */
    public static function deleteFileStorage( string $disk = 'public', string $path)
    {
        if (Storage::disk($disk)->exists($path)) {
            Storage::disk($disk)->delete($path);
        } else {
            return response()->json(array(
                'code'      =>  404,
                'message'   =>  'No have image'
            ), 404);
        }
    }
}
