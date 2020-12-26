<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recording extends Model
{
    // protected $fillable = [

    // ];

    public function nailsJobs()
    {
        return $this->belongsTo('App\NailsJobs', 'nails_job_id');
    }

    public function recordingTime()
    {
        return $this->belongsTo('App\RecordingTime');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
