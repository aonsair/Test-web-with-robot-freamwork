<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => array(
                'required',
                'regex:/(^[ก-ฮa-zA-Z].*[ก-ฮa-zA-Z\d\w\W\s\S]+$)/',
                'min:8',
                'max:180',
                'unique:trips',
            ),
            'cover_image' => 'mimes:png',
            'detail' => array(
                'required',
                'regex:/(^[ก-ฮa-zA-Z].*[ก-ฮa-zA-Z\d\w\W\s\S]+$)/',
                'min:40',
                'max:180',
            ),
            'date_start' => 'required',
            'date_stop' => 'required',
            'price' => array(
                'required',
                'numeric',
            ),
            'time_start' => 'required',
            'time_stop' => 'required',
            'amount' => array(
                'required',
                'numeric',
            ),
            'published_at' => 'required|date',
            'province_list' =>  'required',
        ];
    }

    public function messages(){
        return [
            'required'=>'You have to input some data to :attribute',

            'unique' =>'This name of trip is already in use',

            'regex' => 'This content have problem, please change your content',

            'min' => ':attribute of trip too short, please input more than 8 alphabets',

            'max' => ':attribute of trip too long, please input shorter than 150 alphabets',

            'numeric' => ':attribute is not numeric',
        ];
    }

}
