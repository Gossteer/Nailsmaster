<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $fillable = [
        'portfolio_id', 'confirmation', 'image'
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

}
