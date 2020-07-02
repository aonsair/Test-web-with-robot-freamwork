<?php

namespace App\Http\Controllers;

Use Auth;
Use App\Review;
Use App\Comment;
Use App\Category;
Use App\Province;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(CommentRequest $request, $id)
    {
        $comment = Comment::create($request->all());
        $comment->user_id = Auth::user()->id;
        $comment->review_id = $id;
        $comment->save();
        // เปลี่ยนเวลา newcomment_at ที่ตาราง review
        $review = Review::find($id);
        $review->newcomment_at = $comment->created_at;
        $review->update();
        session()->flash('flash_message_create', 'Create Review Complete.');
        return back();

    }

    public function show($id)
    {
        //
    }
}
