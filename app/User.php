<?php

namespace App;

use DateTimeInterface;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','login', 'surname', 'lastname', 'phone_number', 'admin_id', 'master_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y H:i');
    }

    public function master()
    {
        return $this->belongsTo('App\Master');
    }

    public function admin()
    {
        return $this->hasOne('App\Admin');
    }

    public function masterPortfolio()
    {
        return $this->hasOneThrough('App\Portfolio', 'App\Master',
        'portfolio_id', // Foreign key on cars table...
        'id',
        'id', // Local key on mechanics table...
        'id');
    }

    // public function toArray($request)
    // {
    //     return parent::toArray($request);
    // }

}
