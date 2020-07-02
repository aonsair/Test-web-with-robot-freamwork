<?php

namespace App\Http\Controllers;

Use Auth;
Use App\Trip;
Use App\Province;
use Illuminate\Http\Request;
use App\Http\Requests\TripRequest;
use Illuminate\Support\Facades\Gate;


class TripController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $trips = Trip::orderBy('created_at','desc')->published()->paginate(6);
        $provinces = Province::get();
        return view('trips.show_all', compact('trips','provinces'));
    }

    public function show($id)
    {
//        $trip = Trip::find($id);
//        if (!empty($trip)) {
//            return view('trips.show', compact('trip'));
//        } else {
//            abort(404);
//        }

        $trip = Trip::published()->find($id);
        if (!empty($trip)) {
            return view('trips.show', compact('trip'));
        } else {
            if(empty(Auth::user())){
                session()->flash('flash_message_unpublished_failed', trans('flash.UnpublishedWT'));
                return redirect('/');
            }
            $trip = Trip::unpublished()->find($id);
            if (Auth::user()->can('view', $trip)) {
                if (!empty($trip)) {
                    return view('trips.show', compact('trip'));
                } else {
                    session()->flash('flash_message_unpublished_failed', trans('flash.UnpublishedWT'));
                    return back();
                }
            } else {
                session()->flash('flash_message_unpublished_failed', trans('flash.UnpublishedWT'));
                return back();
            }
        }
    }

//    public function showSample() // ในหน้า index
//    {
//        $trips = Trip::orderBy('published_at','desc')->published()->take(3)->get();
//        return view('pages.index', compact('trips'));
//    }

    public function create()
    {
        if(Auth::user()->role->slug==="gold"){
            $province_list = Province::pluck('name', 'id');
            session()->flash('flash_message_create', 'Create Trip Complete.');
            return view('Trips.create', compact('province_list'));
        }else{
            session()->flash('flash_message_error', 'You have no permission to create trip.');
            return redirect('/trip');
        }
    }

    public function store(TripRequest $request)
    {

        $trip = Trip::create($request->all());
        if ($request->hasFile('cover_image')) {
            $cover_filename = $request->file('cover_image')->getClientOriginalName();
            $cover_name = date('Ymd-His-') . $cover_filename;
            $public_path = 'img/trips/';
            $destination = base_path() . "/public/" . $public_path;
            $request->file('cover_image')->move($destination, $cover_name);
            $trip->cover_image = $public_path . $cover_name;
        }
        $trip->user_id = Auth::user()->id;
        $provincesId = $request->input('province_list');
        $trip->province()->associate($provincesId);   // associate ใช้กับ belongsTo
        $trip->save();

        session()->flash('flash_message_create', 'Create Trip Complete.');
        return redirect('/trip');
    }

    public function edit($id)
    {
        $trip = Trip::find($id);
        if (Auth::user()->can('update', $trip)) {
            if (empty($trip))
                abort(404);
            $province_list = Province::pluck('name', 'id');
            return view('trips.edit', compact('trip', 'province_list'));
        }else {
            session()->flash('flash_message_error', 'You have no permission to edit the trip: ' . $trip->name);
        }
        return redirect('/trip');
    }

    public function update(Request $request, $id)
    {
        $trip = Trip::findOrFail($id);

        if (Auth::user()->can('update', $trip)) {

            $trip->update($request->all());
            if ($request->hasFile('cover_image')) {
                $cover_filename = $request->file('cover_image')->getClientOriginalName();
                $cover_name = date('Ymd-His-') . $cover_filename;
                $public_path = 'img/trips/';
                $destination = base_path() . "/public/" . $public_path;
                $request->file('cover_image')->move($destination, $cover_name);
                $trip->cover_image = $public_path . $cover_name;
                $trip->save();
            }
            $provincesId = $request->input('province_list');
            $trip->province()->associate($provincesId);
            $trip->save();

            if ( (!empty($provincesId)) ) {
                $trip->province()->associate($provincesId);
            } else {
                $trip->province()->detach();
            }
            session()->flash('flash_message_edit', 'Edit Trip Complete.');
            return redirect('/trip');
        } else {
            session()->flash('flash_message_error', 'You have no permission to edit the trip: ' . $trip->name);
        }
        return redirect('/trip');
    }

    public function destroy($id)
    {
        $trip = Trip::findOrFail($id);
        if (Auth::user()->can('delete', $trip)) {
            $trip->delete();
            session()->flash('flash_message_delete', 'The trip: ' . $trip->name . ' was deleted by you');
            return redirect('/trip');
        } else {
            session()->flash('flash_message_error', 'You have no permission to delete the trip.' . $trip->name);
        }
        session()->flash('flash_message_error', 'You have no permission to edit the trip: ' . $trip->name);
        return redirect('/trip');
    }

    public function unpublished()
    {
        if (Gate::allows('unpublished-trips', Auth::user())) {
                $trips = Trip::orderBy('created_at', 'desc')->unpublished()->where('user_id','=',Auth::user()->id)->paginate(6);
                $trip_count = Trip::orderBy('created_at', 'desc')->unpublished()->where('user_id','=',Auth::user()->id)->count();
                // dd($trips);
                $provinces = Province::get();
                if($trip_count<1){
                    session()->flash('flash_message_unpublished_failed', trans('flash.UnpublishedWR'));
                    return back();
                }else {
                    return view('trips.show_all', compact('trips', 'provinces'));
                }
        }else {
            session()->flash('flash_message_unpublished_failed', trans('flash.UnpublishedWR'));
            return back();
        }
    }
}
