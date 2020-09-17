<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function master()
    {
        return $this->hasOne('App\Master');
    }
}
