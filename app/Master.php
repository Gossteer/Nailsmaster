<?php

namespace App;

use DateTimeInterface;
use Facade\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Master extends Model
{
    protected $fillable = [
        'portfolio_id', 'status', 'image'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d.m.Y H:i');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function portfolio()
    {
        return $this->belongsTo('App\Portfolio');
    }

    public function masterPoint()
    {
        return $this->hasMany('App\MasterPoint');
    }

    public function getImageAttribute($value)
    {
        // $path = Storage::get(storage_path('/app/private/' . $value));
        // $path = storage_path('app/uploads/ANY FOLDER NAME/' . $file);
        // try {
        //     $file = File::get($path);
        //     $type = File::mimeType($path);
        //     $response = Response::make($file, 200);
        //     $response->header("Content-Type", $type);
        //     return $response;
        // } catch (FileNotFoundException $exception) {
        //     abort(404);
        // }
        // return $path;
        // return file(storage_path('app/private/' . $value));
        return 'http://nailsmasterstest.com.xsph.ru/'.Storage::url($value);
        // return returnFile($value);
        // return response()->file('storage/app/private/'.$value);
    }

}
