@extends('layouts.app')
@section('content')
    <section>
        <div class="container">

            <p>Benvenuto nel sito peggiore della storia. Avrai la possibilità di visualizzare solamente 8 Film</p>


            <a href="{{ route('movies.index') }}">Vai all lista dei film</a>

            @include('partials.card')
        </div>

    </section>
@endsection
