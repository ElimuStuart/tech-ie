@extends('layouts.app')


@section('content')
<section id="story">
    <h2>Create Event</h2>

    {{ Form::open(['action' => ['EventsController@update', $event->id], 'method' => 'post']) }}

    <div class="form-group">
    
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $event->name, ['class' => 'form-control', 'placeholder' => 'Event Name'])}}

    </div>
    <div class="form-group">
    
        {{Form::label('date', 'Date')}}
        {{ Form::date('date', $event->date, ['class' => 'form-control']) }}

    </div>
    <div class="form-group">
    
        {{Form::label('venue', 'Venue')}}
        {{Form::select('venue', ['Kampala' => 'Kampala', 'Jinja' => 'Jinja', 'Entebbe' => 'Entebbe'], $event->venue, ['class' => 'form-control', 'placeholder' => 'Pick a venue...'])}}

    </div>
    <div class="form-group">
    
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', $event->description, ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Event Description'])}}

    </div>
    {{Form::hidden('_method', 'PUT')}}

    {{Form::submit('Submit', ['class' => 'btn btn-primary btn-block'])}}
	
    {{ Form::close() }}
    

</section>
@endsection