@extends('layouts.app')
@section('content')
    <section>
        <div class="container">

            <h1>Home page</h1>
            <p>Hello World</p>
            <a href="{{ route('movies.index') }}">Vai all lista dei film</a>
        </div>

    </section>
