<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recording extends Model
{
    public function nailsJobs()
    {
        return $this->belongsTo('App\NailsJobs');
    }

    public function recordingTime()
    {
        return $this->belongsTo('App\RecordingTime');
    }
}
