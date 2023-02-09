@extends('layouts.app')

@section('title', 'Home')

@section('main-app')
@foreach ($movies as $movie)
    @dump($movie->title)
    @dump($movie->original_title)
    @dump($movie->nationality)
    @dump($movie->date)
    @dump($movie->vote)

    <hr>
@endforeach
@endsection