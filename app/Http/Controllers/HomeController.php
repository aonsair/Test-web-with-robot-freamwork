<?php

namespace App\Http\Controllers;

Use Auth;
Use App\Trip;
Use App\User;
Use App\Review;
Use App\Province;
Use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['showSample']]);
    }

    public function showSample()
    {
        $trips = Trip::orderBy('created_at','desc')->published()->take(3)->get();
        $reviews = Review::orderBy('newcomment_at', 'desc')->published()->take(4)->get();
        $users = User::get();
        $provinces = Province::get();
        return view('index', compact('trips', 'reviews', 'provinces', 'users'));
    }
}
