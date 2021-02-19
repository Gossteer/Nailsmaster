<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Logger extends Model
{
    protected $fillable = [
        'type_id',
        'message',
        'user_id',
        'nails_jobs_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function nailsJobs()
    {
        return $this->belongsTo('App\NailsJobs');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y H:i');
    }
}
