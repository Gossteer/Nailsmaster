<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'user_id',
        'master_id',
        'master_point_id',
        'nails_jobs_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function master()
    {
        return $this->belongsTo('App\Master');
    }

    public function masterPoint()
    {
        return $this->belongsTo('App\MasterPoint');
    }

    public function nailsJobs()
    {
        return $this->belongsTo('App\NailsJobs');
    }
}
