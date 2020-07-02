<?php

namespace App\Http\Controllers;

Use Auth;
Use App\Province;
Use App\Comment;
Use App\Category;
Use App\Review;
use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;


class ReviewController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index() // หน้า show_all
    {
        // $reviews = DB::table('reviews', 'published', 'desc')->paginate(15);
        // $reviews = Review::orderBy('published_at', 'desc')->published()->take(15)->get();
        $reviews = Review::orderBy('newcomment_at', 'desc')->published()->paginate(9);
        $category_reviews = DB::table('category_review')->get();
        $categories = Category::get();
        return view('reviews.show_all', compact('reviews', 'category_reviews', 'categories', 'view'));
    }

    public function show($id) // หน้า show
    {
        $comments = Comment::get();
        $category_reviews = DB::table('category_review')->get();
        $categories = Category::get();
        $review = Review::published()->find($id);
        // นับจำนวน view
        if (!empty($review)) {
            $review->view = $review->view + 1;
            $review->update();
            return view('reviews.show', compact('review', 'category_reviews', 'categories', 'comments'));
        } else {
            if(empty(Auth::user())){
                session()->flash('flash_message_unpublished_failed', trans('flash.UnpublishedWR'));
                return redirect('/');
            }
            $review = Review::unpublished()->find($id);
            if (Auth::user()->can('view', $review)) {
                    if (!empty($review)) {
                        return view('reviews.show', compact('review', 'category_reviews', 'categories', 'comments'));
                    } else {
                        session()->flash('flash_message_unpublished_failed', trans('flash.UnpublishedWR'));
                        return back();
                    }
            } else {
                session()->flash('flash_message_unpublished_failed', trans('flash.UnpublishedWR'));
                return back();
            }
        }
    }

//    public function showSample() // ในหน้า index
//    {
//        $reviews = Review::orderBy('published_at', 'desc')->published()->take(4)->get();
//        return view('pages.index', compact('reviews'));
//    }

    public function create()
    {
        if (Auth::user()->role->slug === "member" or Auth::user()->role->slug === "gold") {
            $category_list = Category::pluck('name', 'id');
            $province_list = Province::pluck('name', 'id');
            session()->flash('flash_message_create', 'Create review complete.');
            return view('reviews.create', compact('category_list', 'province_list'));
        } else {
            session()->flash('flash_message_error', 'You have no permission to create review.');
            return redirect('/review');
        }
    }


    public function store(ReviewRequest $request)
    {
        $review = Review::create($request->all());
        if ($request->hasFile('cover_image')) {
            $cover_filename = $request->file('cover_image')->getClientOriginalName();
            $cover_name = date('Ymd-His-') . $cover_filename;
            $public_path = 'img/reviews/';
            $destination = base_path() . "/public/" . $public_path;
            $request->file('cover_image')->move($destination, $cover_name);
            $review->cover_image = $public_path . $cover_name;
        }
        $review->user_id = Auth::user()->id;
        $provincesId = $request->input('province_list');
        $categoriesId = $request->input('category_list');
        $review->province()->associate($provincesId);   // associate ใช้กับ belongsTo
        $review->save();
        if (!empty($categoriesId))
            $review->categories()->sync($categoriesId);
        session()->flash('flash_message_create', 'Create Review Complete.');
        return redirect('/review');
    }

    public function edit($id)
    {
        $review = Review::find($id);
        if (Auth::user()->can('update', $review)) {
            if (empty($review))
                abort(404);
            $category_list = Category::pluck('name', 'id');
            $province_list = Province::pluck('name', 'id');
            return view('reviews.edit', compact('review', 'category_list', 'province_list'));
        } else {
            session()->flash('flash_message_error', 'You have no permission to edit the review: ' . $review->title);
        }
        return redirect('/review');
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        if (Auth::user()->can('update', $review)) {

            $review->update($request->all());
            if ($request->hasFile('cover_image')) {
                $cover_filename = $request->file('cover_image')->getClientOriginalName();
                $cover_name = date('Ymd-His-') . $cover_filename;
                $public_path = 'img/reviews/';
                $destination = base_path() . "/public/" . $public_path;
                $request->file('cover_image')->move($destination, $cover_name);
                $review->cover_image = $public_path . $cover_name;
                $review->save();
            }
            $provincesId = $request->input('province_list');
            $categoriesId = $request->input('category_list');
            $review->province()->associate($provincesId);
            $review->save();

            if ((!empty($provincesId)) or (!empty($categoriesId))) {
                $review->province()->associate($provincesId);
                $review->categories()->sync($categoriesId);
            } else {
                $review->province()->detach();
                $review->categories()->detech();
            }
            session()->flash('flash_message_edit', 'Edit Review Complete.');
            return redirect('/review');
        } else {
            session()->flash('flash_message_error', 'You have no permission to edit the review: ' . $review->title);
        }
        return redirect('/review');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
//        $comments = Comment::get()->where('$review_id','=','$id');
        if (Auth::user()->can('delete', $review)) {
//            $comments->delete();
            $review->delete();
            session()->flash('flash_message_delete', 'The review: ' . $review->title . ' was deleted by you');
            return redirect('/review');
        } else {
            session()->flash('flash_message_error', 'You have no permission to delete the review.' . $review->title);
        }
        session()->flash('flash_message_error', 'You have no permission to edit the review.' . $review->title);
        return redirect('/review');
    }

    public function unpublished()
    {
        if (Gate::allows('unpublished-reviews', Auth::user())) {
            $reviews = Review::orderBy('newcomment_at', 'desc')->unpublished()->where('user_id', '=', Auth::user()->id)->paginate(9);
            $review_count = Review::orderBy('created_at', 'desc')->unpublished()->where('user_id', '=', Auth::user()->id)->count();
            $category_reviews = DB::table('category_review')->get();
            $categories = Category::get();
            if ($review_count < 1) {
                session()->flash('flash_message_unpublished_failed', trans('flash.UnpublishedWR'));
                return back();
            } else {
                return view('reviews.show_all', compact('reviews', 'category_reviews', 'categories'));
            }

        } else {
            session()->flash('flash_message_unpublished_failed', trans('flash.UnpublishedWR'));
            return back();
        }
    }

}
