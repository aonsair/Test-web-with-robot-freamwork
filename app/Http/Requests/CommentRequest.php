<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'detail' => array(
                'min:8',
                'max:150',
            ),
        ];
    }

    public function messages(){
        return [
            'min' => ':attribute too short, please input more than 8 alphabets',
            'max' => ':attribute of trip too long, please input shorter than 150 alphabets',
        ];
    }

}
