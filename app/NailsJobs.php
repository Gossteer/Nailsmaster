<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class NailsJobs extends Model
{
    protected $fillable = [
        'price',
        'image',
        'description',
        'category_nail_id',
        'master_point_id',
        'description',
        'logical_delet',
        'name',
        'status',
        'instagram',
        'latitude',
        'longitude',
        'address'
    ];

    protected $table = 'nails_jobs';


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d.m.Y H:i');
    }

    public function recording()
    {
        return $this->hasMany('App\Recording');
    }

    public function favorite()
    {
        return $this->hasMany('App\Favorite');
    }

    public function masterPoint()
    {
        return $this->belongsTo('App\MasterPoint', 'master_point_id');
    }

    public function categoryNails()
    {
        return $this->belongsTo('App\CategoryNails');
    }

    public function logger()
    {
        return $this->hasMany('App\Logger');
    }

    public function getImageAttribute($value)
    {

        return 'http://nailsmasterstest.com.xsph.ru'.Storage::url($value);

    }

}
