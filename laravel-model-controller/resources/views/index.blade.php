@extends('layouts.app')

@section('content')
 <div class="row movies-container">
    @foreach ($movies as $movie)
    <x-card :movie="$movie"></x-card>
    @endforeach
 </div>
@endsection