<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title',
        'text_sample',
        'body',
        'cover_image',
        'view',
        'published_at',
        'newcomment_at',
        'user_id',
        'category_id',
        'province_id',
    ];

    protected $guarded = ['id'];
    protected $dates = ['published_at','newcomment_at']; // กำหนดให้ค่าของ field นั้น เป็น Carbon Object

    // published
    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::parse($date);
//        $this->attributes['published_at'] = Carbon::parse($date)->subDay();
    } // แปลงค่าก่อนการบันทึก

    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now());
    } // กำหนนดเงื่อนไขของการดึงข้อมูล

    public function scopeUnpublished($query){
        $query->where('published_at', '>', Carbon::now());
    } // กำหนนดเงื่อนไขของการดึงข้อมูล

    // relationship
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function categories(){
        return $this->belongsToMany('App\Category')->withTimestamps();
    }

    // not_sure
    public function getCategoryListAttribute(){
        return $this->categories->pluck('id');
    }

    public function province(){
        return $this->belongsTo('App\Province');
    }

    // not_sure
    public function getProvinceListAttribute(){
        return $this->province;
    }
}
