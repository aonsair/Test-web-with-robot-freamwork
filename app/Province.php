<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['name'];

    // relationship
    public function reviews()
    {
        return $this->belongsToMany('App\Review');
    }

    public function trips()
    {
        return $this->belongsToMany('App\Trip');
    }
}
