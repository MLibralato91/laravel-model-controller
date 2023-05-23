@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <h1>Best Movies</h1>
            @include('partials.card')
        </div>
    </section>
@endsection

<style lang="scss" scoped>
    h1 {
        color: red;
    }
</style>
