@extends('layout.main')

@section('content')
    <div class="container-fluid px-5 edit">
        <div class="row px-3">
            <h1 class="mb-5">Modifica di : {{ $comic->title }}</h1>
            <div class="col-4 debug d-flex justify-content-center align-items-center">
                <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
            </div>

            <div class="col-8 debug py-4">
                <form action="{{ route('comics.index') }}" method="POST" >
                    @csrf
                    {{-- titolo --}}
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}" required>
                    </div>
                    {{-- immagine --}}
                    <div class="mb-3">
                      <label for="image" class="form-label">Image</label>
                      <input type="text" class="form-control" name="image" id="image" value="{{ $comic->image }}" required>
                    </div>
                    {{-- type --}}
                    <div class="mb-3">
                      <label for="type" class="form-label">Type</label>
                      <input type="text" class="form-control" name="type" id="type" value="{{ $comic->type }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>



    </div>

@endsection
