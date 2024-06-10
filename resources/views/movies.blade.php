@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Movies</h2>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-xs-12 col-ms-6 col-xl-4 mt-3">
                    @include('partials.movie-card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
