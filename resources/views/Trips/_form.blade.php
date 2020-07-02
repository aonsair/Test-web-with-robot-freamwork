<link rel="stylesheet" href="{{ URL::asset('css/styleLogin.css') }}" />

<div class="row">
    <div class="col-xs-12 col-md-10" style="font-family:'Kanit',sans-serif; width: 78%; margin: 14% 11% 9% 11%; z-index: 1000;">


        <div class="col-xs-12 col-md-9" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('name', trans('create.Trip') . ': ') !!}
                {!! Form::text('name', null,['class'=>'form-control border-primary', 'style'=>'background: #fff', 'placeholder'=>trans('create.TripPH')]) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-3 mt-10" style="font-family:'Kanit',sans-serif; color: #0c4cb2; margin-top: 0px;">
            <div class="form-group">
                {!! Form::label('cover_image', trans('create.CoverImageT') . ': ' ) !!}
                {!! Form::file('cover_image', null, ['style'=>'color: #0c4cb2']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-12 mt-10" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('detail', trans('create.Detail') . ': ') !!}
                {!! Form::textarea('detail', null,['class'=>'form-control border-primary', 'rows'=>5, 'placeholder'=>trans('create.DetailPH')]) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-6 mt-10" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('date_start', trans('create.DateStart') . ':') !!}
                {!! Form::input('date', 'date_start', isset($trip)?$trip->date_start->format('Y-m-d'):\Carbon\Carbon::now()->format('Y-m-d'), ['class'=>'form-control border-primary', 'style'=>'background: #fff']) !!}
            </div>
        </div>


        <div class="col-xs-12 col-md-6 mt-10" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('time_start', trans('create.TimeStart') . ':') !!}
                {!! Form::input('time', 'time_start', isset($trip)?$trip->time_start:\Carbon\Carbon::now(), ['class'=>'form-control border-primary', 'style'=>'background: #fff']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-6 mt-10" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('date_stop', trans('create.DateStop') . ':') !!}
                {!! Form::input('date', 'date_stop', isset($trip)?$trip->date_stop->format('Y-m-d'):\Carbon\Carbon::now()->format('Y-m-d'), ['class'=>'form-control border-primary', 'style'=>'background: #fff']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-6 mt-10" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('time_stop', trans('create.TimeStop') . ':') !!}
                {!! Form::input('time', 'time_stop', isset($trip)?$trip->time_stop:\Carbon\Carbon::now(), ['class'=>'form-control border-primary', 'style'=>'background: #fff']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-6 mt-10" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('price', trans('create.Price') . ': ') !!}
                {!! Form::text('price', null,['class'=>'form-control border-primary', 'style'=>'background: #fff', 'placeholder'=>trans('create.AmountPH')]) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-6 mt-10" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('amount', trans('create.Amount') . ': ') !!}
                {!! Form::text('amount', null,['class'=>'form-control border-primary', 'style'=>'background: #fff', 'placeholder'=>trans('create.AmountPH')]) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-6 mt-10" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('published_at', trans('create.Published') . ':') !!}
                {!! Form::input('date', 'published_at', isset($trip)?$trip->published_at->format('Y-m-d'):\Carbon\Carbon::now()->format('Y-m-d'), ['class'=>'form-control border-primary', 'style'=>'background: #fff']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-6 mt-10" style="font-family:'Kanit',sans-serif;">
            <div class="form-group">
                {!! Form::label('province_list', trans('create.Provinces') . ': ') !!}
                {!! Form::select('province_list', $province_list,2,['class' => 'form-control border-primary', 'style'=>'background: #fff', 'placeholder'=>trans('create.ChooseProvince')]) !!}
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
    document.getElementById("trip_menu").style.color = "#11afff";
</script>
