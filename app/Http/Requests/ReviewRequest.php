<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => array(
                'required',
                'regex:/(^[ก-ฮa-zA-Z].*[ก-ฮa-zA-Z\d\w\W\s\S]+$)/',
                'min:8',
                'max:180',
                'unique:reviews',
            ),
            'body' => 'required',
            'cover_image' => 'mimes:png,jpg,jpeg,gif',
            'published_at' => 'required|date',
            'province_list' => 'required',
        ];
    }

    public function messages(){
        return [

            'required'=>'You have to input some data to :attribute',

            'unique' =>'This name of review is already in use',

            'regex' => 'This title have problem, please change your title',

            'title.min' => 'Name of review too short, please input more than 8 alphabets',

            'text_sample.min' => 'Too short of text sample, please input more than 8 alphabets',

            'max' => ':attribute of trip too long, please input shorter than 150 alphabets',
            ];
    }

}
