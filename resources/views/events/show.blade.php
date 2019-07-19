@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-md-2">

<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$event->name}}</h5>
        <p class="card-text"> <span><i class="fas fa-map-marker-alt"></i></span> {{$event->venue}}</p>
        <p class="card-text"><span><i class="fas fa-calendar-day"></i></span> {{$event->date}}</p>
        <div class="card-text">
            {!! $event->description !!}
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <!-- <img src="..." class="card-img" alt="..."> -->
      <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q={{$event->venue}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
    </div>
  </div>
</div>

<div class="card">

<div class="card-body">


<a href="/events" class="btn btn-primary">Back</a> 
@if(!Auth::guest())

@if(Auth::user()->id == $event->user_id)
<hr class="pt-2 pb-2">

<a href="/events/{{$event->id}}/edit" class="btn btn-success">Edit</a>

{{ Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'post', 'class' => 'float-right']) }}

{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	
{{ Form::close() }}

@endif

@endif

</div>

</div>

</div>


@endsection