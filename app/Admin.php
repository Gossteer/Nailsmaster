<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y H:i');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
