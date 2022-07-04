@extends('layout.main')

@section('content')
    <div class="container-fluid p-5 edit">
        @if ($errors->any())

        <div class="alert-danger row p-3 rounded-3 mb-3">
            <div class="col">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif


        <div class="row px-3">

            <h1 class="mb-5">Modifica di : {{ $comic->title }}</h1>

            <div class="col-4 debug d-flex justify-content-center align-items-center py-4">
                <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
            </div>

            <div class="col-8 debug py-4 debug">
                <form action="{{ route('comics.update', $comic) }}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- titolo --}}
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text"
                      class="form-control @error('title') is-invalid @enderror"
                      name="title" id="title"
                      value="{{ old('title', $comic->title) }}" required>
                      @error('title')
                          <p>{{ $message }}</p>
                      @enderror
                    </div>
                    {{-- immagine --}}
                    <div class="mb-3">
                      <label for="image" class="form-label">Image</label>
                      <input type="text"
                      class="form-control @error('image') is-invalid @enderror"
                      name="image" id="image"
                      value="{{ old('image', $comic->image) }}" required>
                      @error('title')
                          <p>{{ $message }}</p>
                      @enderror
                    </div>
                    {{-- type --}}
                    <div class="mb-3">
                      <label for="type" class="form-label">Type</label>
                      <input type="text"
                      class="form-control @error('type') is-invalid @enderror"
                      name="type" id="type"
                      value="{{ old('type', $comic->type) }}" required>
                      @error('title')
                          <p>{{ $message }}</p>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Send data</button>
                </form>
            </div>
        </div>



    </div>

@endsection
