<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $fillable = [
        'portfolio_id', 'confirmation',
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function portfolio()
    {
        return $this->belongsTo('App\Portfolio');
    }
}
