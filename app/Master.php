<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $fillable = [
        'portfolio_id', 'confirmation',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y H:i');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function portfolio()
    {
        return $this->hasOne('App\Portfolio');
    }
}
