@extends('layouts.main2')

@section('site_title', trans('main.Review').': '.($review->title))

@section('content')


    <div class="main-wrapper-onepage main oh">

        <!-- Page Title -->
        @if(!empty($review->cover_image))
            <section class="page-title text-center"
                     style="background-color: rgba(0,0,0,0.5); background-image: url({{ url($review->cover_image) }}); background-size: cover;">
                @else
                    <section class="page-title text-center"
                             style="background-color: rgba(0,0,0,0.5); background-image: url({{ URL::asset('img/reviews/no_image.jpg') }}); background-size: cover;">
                        @endif
                        <div class="container relative clearfix layer">
                            <div class="title-holder local-scroll">
                                <div class="title-text">
                                    <a id="goto-commnet" href="#comment">
                                        <h1 class="color-white heading-frame"> {{ trans('main.Review') }}
                                            : {{ $review->title }}</h1>
                                    </a>
                                    <ol class="breadcrumb local-scroll" style="color: #fff; font-size: 16px;">
                                        <li>
                                            {{ trans('index.By') }} {{ $review->user->name }}
                                        </li>
                                        <li>
                                            {{ trans('index.PublishedAt') }}  {{ date('d/m/Y',strtotime($review->published_at)) }}
                                        </li>
                                        <li>
                                            {{ trans('index.Province') }}  {{ $review->province->name }}
                                        </li>
                                        <li>
                                            <?php $count = 0 ?>
                                            @foreach($comments as $comment)
                                                @if($comment->review_id === $review->id)
                                                    <?php $count += 1 ?>
                                                @endif
                                            @endforeach
                                            <a name="comment" href="#comment">
                                                {{ $count }}
                                                @if($count>=2)
                                                    {{ trans('create.Comments') }}{{ trans('create.s') }}
                                                @else
                                                    {{ trans('create.Comments') }}
                                                @endif
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section> <!-- end page title -->

                    <!-- Blog Single -->
                    <section class="section-wrap pb-100 blog-single pt-60">
                        <div class="container relative">
                            <div class="row">

                                <!-- content -->
                                <div class="col-sm-12 blog-content">

                                    <!-- standard post -->
                                    <div class="entry-item">
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">

                                                {{--<div class="entry-title">--}}
                                                {{--<h2>This is Awesome blog post title</h2>--}}
                                                {{--</div>--}}
                                                {{--<ul class="entry-meta bottom-line">--}}
                                                {{--<li class="entry-date">--}}
                                                {{--<a href="#">20 July, 2015</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="entry-author">--}}
                                                {{--by <a href="#">John Doe</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="entry-category">--}}
                                                {{--in <a href="#">Photography</a>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                {{--<a href="blog-single.html" class="entry-comments">10 Comments</a>--}}
                                                {{--</li>--}}
                                                {{--</ul>--}}
                                                <div class="entry">
                                                    <div class="entry-content">

                                                        <span style="text-align:  justify;"> <?= $review->body ?> </span>

                                                        <div class="row mt-60" style="border-top: 1px dashed #b9b9b9;">
                                                            <br>
                                                            <div class="col-md-8">
                                                                <div class="entry-tags">
                                                                    @if($review->view>=2)
                                                                        <span style="color: #0c4cb2"> <h6>{{ trans('index.View') }}{{ trans('create.s') }}
                                                                                :</h6> {{ $review->view }} </span>
                                                                    @else
                                                                        <span style="color: #0c4cb2"> <h6>{{ trans('index.View') }}</h6>: {{ $review->view }} </span>
                                                                    @endif
                                                                </div>
                                                            </div> <!-- end tags -->

                                                            <div class="col-md-4 clearfix">
                                                                <div class="entry-share">
                                                                    <h6>Share:</h6>
                                                                    <div class="socials">
                                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                                                                           target="_blank"><i
                                                                                    class="fab fa-facebook-f"></i></a>
                                                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"
                                                                           target="_blank"><i
                                                                                    class="fab fa-twitter"></i></a>
                                                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                                                        <a href="#"><i
                                                                                    class="fab fa-tripadvisor"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="entry-tags">
                                                                    <h6>{{ trans('index.Category') }}</h6>
                                                                    @foreach($category_reviews as $cr)
                                                                        @if(($cr->review_id) === ($review->id))
                                                                            @foreach($categories as $category)
                                                                                @if(($category->id) === ($cr->category_id))
                                                                                    <span style="color: #0c4cb2"> {{ $category->name }} </span>
                                                                                @endif
                                                                            @endforeach
                                                                        @else
                                                                            @continue
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div> <!-- end tags -->
                                                        </div> <!-- end share -->

                                                    </div>
                                                </div> <!-- end entry -->

                                            </div>
                                        </div> <!-- end row -->

                                    </div> <!-- end entry item -->
                                </div> <!-- end col -->

                            </div> <!-- end row -->

                        </div> <!-- end container -->
                    </section> <!-- end blog single -->

                    <!-- Comments -->
                    <section class="entry-comments section-wrap pt-100 pb-100 bg-light">
                        <div class="container">
                            <?php $count = 0 ?>
                            @foreach($comments as $comment)
                                @if($comment->review_id === $review->id)
                                    <?php $count += 1 ?>
                                @endif
                            @endforeach
                            <h4 id="comment" class="text-center mb-50">
                                {{ $count }}
                                @if($count>=2)
                                    {{ trans('create.Comments') }}{{ trans('create.s') }}
                                @else
                                    {{ trans('create.Comments') }}
                                @endif
                            </h4>
                            <?php $count = 0 ?>
                            @foreach($comments as $comment)
                                @if($comment->review_id === $review->id)
                                    <?php $count+=1 ?>
                                    <ul class="comment-list">
                                        <li>
                                            <div class="comment-body">
                                                @if($comment->user->role_id == "2") {{-- member --}}
                                                    @if($comment->user->gender == "female")
                                                    <img src="{{ URL::asset('img/profiles/MemberFemale.png') }}"
                                                         class="comment-avatar" alt="member">
                                                    @else
                                                    <img src="{{ URL::asset('img/profiles/MemberMale.png') }}"
                                                         class="comment-avatar" alt="member">
                                                    @endif
                                                @elseif($comment->user->role_id == "1") {{-- gold --}}
                                                    @if($comment->user->gender == "female")
                                                        <img src="{{ URL::asset('img/profiles/GoldFemale.png') }}"
                                                             class="comment-avatar" alt="member">
                                                    @else
                                                        <img src="{{ URL::asset('img/profiles/GoldMale.png') }}"
                                                             class="comment-avatar" alt="member">
                                                    @endif
                                                @else {{-- it-support --}}
                                                    @if($comment->user->gender == "female")
                                                        <img src="{{ URL::asset('img/profiles/ITSupportFemale.png') }}"
                                                             class="comment-avatar" alt="member">
                                                    @else
                                                        <img src="{{ URL::asset('img/profiles/ITSupportMale.png') }}"
                                                             class="comment-avatar" alt="member">
                                                    @endif
                                                @endif
                                                <div class="comment-content">
                                                    <span class="comment-author" style="font-size: 16px;">{{ trans('create.Comments') }}: {{ $count }} {{ trans('create.PostAt') }}{{ date('d/m/Y',strtotime($comment->created_at)) }} {{ trans('create.Time') }}: {{ date('G:i',strtotime($comment->created_at)) }}</span>
                                                    <span style="font-size: 13px; color: #686b72;">{{ trans('main.by') }}: {{ $comment->user->name }} - {{ trans('main.MemberAt') }}: {{ date('d/m/Y',strtotime($comment->user->created_at)) }}</span>
                                                    <p style="text-align: justify;">
                                                        {{ $comment->detail }}</p>
                                                    <hr>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                @endif
                            @endforeach
                            @if($count<1)
                                <ul class="comment-list">
                                    <li>
                                        <div class="comment-body">
                                            <div class="comment-content">
                                                <p style="font-size: 15px; color: #686b72;"> ไม่มีคอมเม้นต์ </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endif

                            {{--<ul class="comment-list">--}}
                            {{--<li>--}}
                            {{--<div class="comment-body">--}}
                            {{--<img src="img/blog/comment_1.jpg" class="comment-avatar" alt="">--}}
                            {{--<div class="comment-content">--}}
                            {{--<span class="comment-author">Michael Doe</span>--}}
                            {{--<span><a href="#">July 25, 2015 at 06:15 pm</a></span>--}}
                            {{--<p>We continuosly seek between design and technology. For over a decade,--}}
                            {{--we've helped--}}
                            {{--businesses to craft honest, emotional experiences through strategy,--}}
                            {{--brand--}}
                            {{--development, graphic design, our team hand picked to provide the right--}}
                            {{--balance of--}}
                            {{--skills to work</p>--}}
                            {{--<hr>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </div>
                    </section> <!--  end comments -->

                    @guest
                    @else
                    <!-- Comment form -->
                        <section class="section-wrap contact-form pt-100 pb-100">
                            <div class="container">

                                <h5 class="text-center mb-50">{{ trans('create.LeaveComment') }}</h5>

                                <div class="row">

                                    <div class="col-md-8 col-md-offset-2">
                                        {!! Form::open(['url'=>'review/'.$review->id, 'action'=>'CommentController@store', 'method' => 'POST', 'files' => false]) !!}
                                        {{--<form method="post" action="{{'CommentController@store', $review->id}}">--}}
                                        @csrf
                                        <div class="form-group">
                                                <textarea type="text" name="detail" class="form-control"
                                                          rows="5"
                                                          placeholder="{{ trans('create.Comment') }}"></textarea>
                                            <input type="hidden" name="review_id" value="{{ $review->id }}"/>
                                        </div>
                                        <div class="form-group">
                                            <input id="submit" type="submit" class="btn btn-warning"
                                                   value="{{ trans('create.Submit') }}"/>
                                        </div>
                                        {{--</form>--}}
                                        {!! Form::close() !!}
                                    </div>

                                </div>
                            </div>
                        </section> <!-- end comment form -->
                    @endguest

            </section>
    </div>

    <script>
        document.getElementById("review_menu").style.color = "#11afff";
    </script>
    @guest
    @else
        @if((Auth::user()->id) == ($review->user_id))
            <div id="create-sth" style="z-index: 10010;" class="show">
                <a id="edit-review" href="{{ action('ReviewController@edit', [$review->id]) }}" alt="edit review"><i
                            class="fa fas fa-cog"></i></a>
            </div>

            <div id="delete-sth" style="z-index: 10010;" class="show">
                <a id="delete-review" href="{{ url('review/delete/'. $review->id) }}" alt="delete review"><i class="fas fa-trash-alt"></i></a>
            </div>

            {{--ปุ่มธรรมดากดลบได้ปกติ แต่ถ้าเป็น tag <a> ไม่ support action--}}
            {{--<form action="{{action('ReviewController@destroy', $review->id)}}" method="post">--}}
            {{--@csrf--}}
            {{--<input name="_method" type="hidden" value="DELETE">--}}
            {{--<button class="btn btn-danger" type="submit">Delete</button>--}}
            {{--</form>--}}

        @endif
    @endguest
@stop

@section('response')
    @if($errors->any())
        <ul class="alert alert-danger"
            style="margin-bottom: 0%;background: rgba(252,20,0,0.78); text-align: center; font-size: 16px;">
            <li><i class="icon icon-Megaphone"></i> {{ trans('flash.Warning') }}</li>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@stop


