<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;


class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'username',
        'password',
        'gender',
        'email',
        'tel',
        'role_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // relationship
    public function comments(){
        return $this->belongsToMany('App\Comment');
    }

    public function reviews(){
        return $this->belongsToMany('App\Review');
    }

    public function trips(){
        return $this->belongsToMany('App\Trip');
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }
}
