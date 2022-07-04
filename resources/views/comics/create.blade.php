@extends('layout.main')


@section('content')

<div class="container">
    @if ($errors->any())

    <div class="alert-danger my-4 p-3 rounded-2">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
    @endif

    <h1>Create page</h1>

    <form action="{{ route('comics.store') }}" method="POST" >
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Comic Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Comic title" required>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Immagine</label>
          <input type="text" class="form-control" name="image" id="image" placeholder="Your image url" required>
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Comic Type</label>
          <input type="text" class="form-control" name="type" id="type" placeholder="write type of comic" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
