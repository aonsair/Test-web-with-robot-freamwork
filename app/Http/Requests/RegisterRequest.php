<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => array(
                'required',
                'regex:/(^[ก-ฮa-zA-Z].*[ก-ฮa-zA-Z\d\w\W\s\S]+$)/',
                'min:8',
                'unique:users',
            ),
            'name' => array(
                'required',
                'regex:/(^[ก-ฮa-zA-Z].*[ก-ฮa-zA-Z\d\w\W\s\S]+$)/',
                'min:8',
            ),
            'password' => array(
                'required',
                'min:8',
            ),
            'image' => 'mimes:png,jpg,jpeg,gif',
            'email' => array(
                '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/',
                'unique:users',
            ),
            'tel' => array(
                'required',
                'numeric',
                'phone_number',
                'max:10',
                'unique:users',
            ),

        ];
    }

    public function messages(){
        return [
            'required'=>'You have to enter some data to :attribute',

            'min' => ':attribute too short, please input more than 8 alphabets',

            'unique' => ':attribute is already in use',
            ];
    }

}
