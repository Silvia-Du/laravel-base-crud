@extends('layout.main')


@section('content')


<div class="container create py-5">

    {{-- data error messages --}}
    @if ($errors->any())
    <div class="alert-danger my-4 p-3 rounded-2">

        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
    @endif

    {{-- form --}}
    <h1 class="mb-4">Crea un nuovo articolo</h1>

    <form action="{{ route('comics.store') }}" method="POST" >
        @csrf

        {{-- titolo --}}
        <div class="mb-3">
          <label for="title" class="form-label">Comic Title*</label>
          <input type="text"
            class="form-control @error('title') is-invalid @enderror"
            name="title" id="title"
            placeholder="Comic title" value="{{ old('title') }}">

            @error('title')
              <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- image --}}
        <div class="mb-3">
          <label for="image" class="form-label">Immagine*</label>
          <input type="text"
            class="form-control @error('image') is-invalid @enderror"
            name="image" id="image"
            placeholder="Your image url" value="{{ old('image') }}">

            @error('image')
              <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- type --}}
        <div class="mb-3">
          <label for="type" class="form-label">Comic Type*</label>
          <input type="text"
            class="form-control @error('type') is-invalid @enderror"
            name="type" id="type"
            placeholder="write type of comic" value="{{ old('type') }}">

            @error('type')
              <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary my-3">Send data</button>
    </form>
</div>


@endsection
