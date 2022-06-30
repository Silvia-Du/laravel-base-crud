@extends('layout.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">{{ $selected_comic->title }}</h1>

        <div class="row comic debug p-3 d-flex justify-content-center">
            <div class="col-4 debug p-5 text-center">
                <img src="{{ $selected_comic->image }}" alt="{{ $selected_comic->title }}">

            </div>
            <div class="col-4 debug d-flex justify-content-center align-items-center flex-column text-center">

                <h2>{{ $selected_comic->title }}</h2>
                <h2>{{ $selected_comic->type }}</h2>
                <div class="mt-3">

                    <a href="{{ route('comics.index') }}" type="button" class="btn btn-warning">Back to list</a>
                    <a href="{{ route('comics.edit', $selected_comic) }}" type="button" class="btn btn-light">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
