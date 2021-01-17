<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MasterPoint extends Model
{
    protected $fillable = [
        'master_id',
        'name',
        'latitude',
        'longitude',
        'status',
        'description',
        'image',
        'address'
    ];

    protected $table = 'master_points';

    public function master()
    {
        return $this->belongsTo('App\Master');
    }

    public function recordingTime()
    {
        return $this->hasOne('App\RecordingTime');
    }

    public function favorite()
    {
        return $this->hasMany('App\Favorite');
    }

    public function nailsJobs()
    {
        return $this->hasMany('App\NailsJobs', 'master_point_id', 'id');
    }

    // public function masterPortfolio()
    // {
    //     return $this->belongsTo('App\Master')->using('App\Portfolio');
    // }

    // public function masterPortfolio()
    // {
    //     return $this->hasOneThrough('App\Portfolio','App\Master',
    //     'portfolio_id', // Foreign key on cars table...
    //     'id', // Local key on mechanics table...
    //     'id');
    // }


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d.m.Y H:i');
    }

    // public function toArray($request)
    // {
    //     return parent::toArray($request);
    // }

    public function getImageAttribute($value)
    {
        return 'http://nailsmasterstest.com.xsph.ru/'.Storage::url($value);
    }
}
