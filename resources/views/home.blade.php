@extends('layouts.app')
@section('content')
    <section>
        <div class="container">

            <h2 class="text-danger pt-3">Migliori Film della settimana</h2>


            <a class="text-light" href="{{ route('movies.index') }}">Vai all lista dei film</a>

            @include('partials.card')
        </div>

    </section>
@endsection

<style lang="scss" scoped>

</style>
