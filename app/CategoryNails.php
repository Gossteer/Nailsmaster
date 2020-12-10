<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryNails extends Model
{
    protected $fillable = [
        'name'
    ];

    public function nailsJobs()
    {
        return $this->hasMany('App\NailsJobs');
    }
}
