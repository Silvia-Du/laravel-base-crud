@extends('layout.main')

@section('content')

<div class="container index">

    <h1>Comics(index page)</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">type</th>
            <th scope="col">More info</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)

            <tr>
              <td>{{ $comic->id }}</td>
              <td>{{ $comic->title }}</td>
              <td>{{ $comic->type }}</td>
              <td>
                <a href="{{ route('comics.show', $comic) }}" type="button" class="btn btn-warning">View More</a>
                <a href="{{ route('comics.edit', $comic) }}" type="button" class="btn btn-light">Edit</a>
                <form class="d-inline" action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>

            @endforeach
        </tbody>
      </table>
</div>

@endsection
