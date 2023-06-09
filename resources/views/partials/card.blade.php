<div class="row">
    @foreach ($movies as $movie)
        <div class="col-3 pt-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->original_title }}</p>
                    <p class=""><span class="fw-bolder pe-1">Votazione:</span>{{ $movie->vote }}</p>
                    <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="btn btn-danger">info</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
