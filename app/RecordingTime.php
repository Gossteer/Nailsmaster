<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class RecordingTime extends Model
{
    protected $fillable = [
        'time',
        'master_point_id',
    ];

    public function masterPoint()
    {
        return $this->belongsTo('App\MasterPoint');
    }

    public function recording()
    {
        return $this->hasMany('App\Recording');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y H:i');
    }
}
