<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'name',
        'cover_image',
        'detail',
        'date_start',
        'date_stop',
        'price',
        'time_start',
        'time_stop',
        'amount',
        'published_at',
        'user_id',
        'province_id',
    ];

    protected $guarded = ['id'];
    protected $dates = ['published_at','date_start','date_stop'];  // กำหนดให้ค่าของ field นั้น เป็น Carbon Object
    protected $times = ['time_start','time_stop'];

    public function setTimeStartAttribute($date){
        $this->attributes['time_start'] = Carbon::parse($date);
    }

    public function setTimeStopAttribute($date){
        $this->attributes['time_stop'] = Carbon::parse($date);
    }


    // published
    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::parse($date);
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

    public function province(){
        return $this->belongsTo('App\Province');
    }

    // not_sure
    public function getProvinceListAttribute(){
        return $this->provinces;
    }
}
