@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{$movie}}
            </li>
        @endforeach
    </ul>
@endsection