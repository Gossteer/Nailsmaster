<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

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
        'name'
    ];


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d.m.Y H:i');
    }

    public function recording()
    {
        return $this->hasMany('App\Recording');
    }


    public function masterPoint()
    {
        return $this->belongsTo('App\MasterPoint');
    }

    public function categoryNails()
    {
        return $this->belongsTo('App\CategoryNails');
    }

}
