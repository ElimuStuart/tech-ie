@extends('layouts.app')

@section('content')

    <section id="story">

    <div class="card">
    <div class="card-body">
        <h5 class="card-title">tech-ie events around town</h5>
        <hr class="pt-2">
        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero hic iure ipsam voluptatibus quam! Recusandae, dolor repellat consectetur sit rem soluta dignissimos eius quibusdam officiis et nobis excepturi suscipit aliquid!</p>

        <div class="row pb-3">
            
                <div class="col-md-4">
                    <img src="{{ asset('images/mice.jpeg') }}" class="rounded-circle" width="200" height="200" alt="sara">
                </div>
                <div class="col-md-4">
                <img src="{{ asset('images/mice.jpg') }}" class="rounded-circle" width="200" height="200" alt="stue">
                </div>
                <div class="col-md-4">
                <img src="{{ asset('images/mice.png') }}" class="rounded-circle" width="200" height="200" alt="karane">
                </div>

            </div>

        <hr class="pt-2">
        <p class="card-title text-center">

        the Three Blind Mice

        </p>
        
    </div>

    

    </div>
    
        <!-- <h2>the Three Blind Mice</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero hic iure ipsam voluptatibus quam! Recusandae, dolor repellat consectetur sit rem soluta dignissimos eius quibusdam officiis et nobis excepturi suscipit aliquid!</p> -->
    </section>
@endsection