@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <h2 class="pt-2">Tutti i Titoli del Momento</h2>
            @include('partials.card')
        </div>
    </section>
@endsection

<style lang="scss" scoped>
    h2 {
        color: red;
    }
</style>
