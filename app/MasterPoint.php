<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class MasterPoint extends Model
{
    protected $fillable = [
        'master_id',
        'name',
        'latitude',
        'longitude',
        'stasus',
        'price',
        'description',
        'image'
    ];

    public function master()
    {
        return $this->belongsTo('App\Master');
    }

    public function recordingTime()
    {
        return $this->hasOne('App\RecordingTime');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y H:i');
    }
}
