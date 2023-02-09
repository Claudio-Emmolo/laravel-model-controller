@extends('layouts.app')

@section('title', 'Home')

@section('main-app')
<main>
    <div class="container">
        <div class="row align-items-stretch row-cols-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="movie card">
                        <h2>Titolo: {{$movie->title}} </h2>
                        <h4>Titolo Originale: {{$movie->original_title}}</h4>
                        <p>
                            Nazionalità: {{$movie->nationality}} <br>
                            Data di uscita: {{$movie->date}} <br>
                            Voto: {{$movie->vote}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection