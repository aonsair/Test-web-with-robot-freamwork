<link rel="stylesheet" href="{{ URL::asset('css/styleLogin.css') }}" />

<div class="row">
    <div class="col-xs-12 col-md-10" style="font-family:'Kanit',sans-serif; width: 78%; margin: 14% 11% 9% 11%; z-index: 1000;">


        <div class="col-xs-12 col-md-9" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('title', trans('create.Review') . ': ') !!}
                {!! Form::text('title', null, ['class'=>'form-control border-primary', 'style'=>'background: #fff', 'placeholder'=>trans('create.ReviewPH')] ) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-3 mt-10" style="font-family:'Kanit',sans-serif; color: #0c4cb2; margin-top: 0px;">
            <div class="form-group">
                {!! Form::label('cover', trans('create.CoverImageR') . ': ' ) !!}
                {!! Form::file('cover_image', null, ['style'=>'color: #0c4cb2']) !!}
            </div>
        </div>

        {{--<div class="col-xs-12 col-md-12 mt-12 mt-10" style="font-family:'Kanit',sans-serif;">--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('textSample', trans('create.TextSample') . ': ') !!}--}}
                {{--{!! Form::textarea('text_sample', null,['class'=>'form-control border-primary', 'rows'=>8, 'placeholder'=>trans('create.TextSamplePH')]) !!}--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="col-xs-12 col-md-12" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('body', trans('create.Content') . ': ') !!}
                {!! Form::textarea('body', null,['class'=>'form-control border-primary','id'=>'body', 'rows'=>25]) !!}
                {{--{!! Form::textarea('body', null, ['class'=>'form-control border-warning']) !!}--}}
            </div>
        </div>

        <div class="col-xs-12 col-md-6" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('category_list', trans('create.Categories') . ': ') !!}
                {!! Form::select('category_list[]', $category_list, null,['multiple','rows'=>5,'class' => 'form-control border-primary', 'style'=>'background: #fff; height: 154px;']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-6 mt-5" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('province_list', trans('create.Provinces') . ': ') !!}
                {!! Form::select('province_list', $province_list,2,['class' => 'form-control border-primary', 'style'=>'background: #fff;']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-6 mt-10" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('published_at', trans('create.Published') . ':') !!}
                {!! Form::input('date', 'published_at', isset($review)?$review->published_at->format('Y-m-d'):\Carbon\Carbon::now()->format('Y-m-d'), ['class'=>'form-control border-primary', 'style'=>'background: #fff']) !!}
            </div>
        </div>


        <div class="col-xs-12 col-md-12 mt-20" style="font-family:'Kanit',sans-serif;">
            <div class="form-group" style="height: 80px;">
                {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control', 'id'=>'submit']) !!}
            </div>
        </div>
    </div>
</div>

<style>
    .form-group input[type=file]{
        margin-top: 10px;
    }
</style>

<!-- bg -->
<ul class="bg-pulse" style="z-index: -20000;">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>

<script>
    document.getElementById("review_menu").style.color = "#11afff";
</script>
