@extends('layouts.app')
@section('content')
    <section>
        <div class="container">

            <h1>Lista dei Film</h1>
            <ul>
                @foreach ($movies as $movie)
                    <li> <a href="{{ route('movies.show', ['id' => $movie->id]) }}">{{ $movie->title }}</a></li>
                @endforeach
            </ul>
        </div>

    </section>
