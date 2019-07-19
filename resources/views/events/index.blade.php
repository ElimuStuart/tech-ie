@extends('layouts.app')

@section('content')

    <section id="">
        
        <div class="container">
        
            <div class="col-md-8 offset-md-2">
            
            <!-- <h2>Events</!--> 
            @if ( count($events)> 0)
                @foreach($events as $event)
                    <div class="card mb-3">
                    <div class="card-body">
                        <h4>{{$event->name}}</h4>
                        <p class="card-text"> <span><i class="fas fa-map-marker-alt"></i></span> {{$event->venue}}</p>
                        <p class="card-text"><span><i class="fas fa-calendar-day"></i></span> {{$event->date}}</p>
                        <!-- <p class="card-text"> <span><i class="fas fa-user-circle"></i> {{$event->date }}</span></p> -->
                        <a href="/events/{{$event->id}}" class="card-link">Details...</a>
                    </div>
                    </div>

                    
                @endforeach
                {{$events->links()}}
            @else
            <p>No Events Found</p>
            @endif

            </div>

        </div>

    </section>
@endsection