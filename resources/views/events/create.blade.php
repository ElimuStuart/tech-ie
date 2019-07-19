@extends('layouts.app')


@section('content')
<div class="col-md-8 offset-md-2">
    <h2>Create Event</h2>

    {{ Form::open(['action' => 'EventsController@store', 'method' => 'post']) }}

    <div class="form-group">
    
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Event Name'])}}

    </div>
    <div class="form-group">
    
        {{Form::label('date', 'Date')}}
        {{ Form::date('date', new \DateTime(), ['class' => 'form-control']) }}

    </div>
    <div class="form-group">
    
        {{Form::label('venue', 'Venue')}}
        {{Form::select('venue', ['Kampala' => 'Kampala', 'Jinja' => 'Jinja', 'Entebbe' => 'Entebbe'], null, ['class' => 'form-control', 'placeholder' => 'Pick a venue...'])}}

    </div>
    <div class="form-group">
    
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '', ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Event Description'])}}

    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary btn-block'])}}
	
    {{ Form::close() }}
    

</div>
@endsection