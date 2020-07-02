<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:20|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'email' => 'required|string|email|max:255|unique:users',
            'tel' => 'required|string|max:10|unique:users',
        ]);
    }

    public function messages(){
        return [
            'required'=>'You have to enter some data to :attribute',

            'min' => ':attribute too short, please input more than 8 alphabets',

            'unique' => ':attribute is already in use',
        ];
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'role_id' => '2',
        ]);

//        return view('auth.register');
    }

}
