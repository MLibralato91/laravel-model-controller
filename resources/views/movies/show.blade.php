@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="">
                <h1 class="text-white">{{ $movie->title }}</h1>
            </div>
            <div class="d-flex">
                <div class="">
                    <img class="w-75" src="{{ $movie->image }}" alt="{{ $movie->title }}">
                </div>
                <div class="ps-3 pt-5">
                    <p class="text-white fw-bolder">{{ $movie->original_title }}</p>
                    <p class="text-white"><span class="fw-bolder pe-1">Nazionalità:</span> {{ $movie->nationality }}</p>
                    <p class="text-white"><span class="fw-bolder pe-1">Data di uscita:</span>{{ $movie->date }}</p>
                    <p class="text-white"><span class="fw-bolder pe-1">Votazione:</span>{{ $movie->vote }}</p>

                </div>
            </div>
        </div>
    </section>
@endsection
