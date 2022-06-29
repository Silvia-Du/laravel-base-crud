@extends('layout.main')

@section('content')

<div class="container">

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
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-light">Light</button>
              </td>
            </tr>

            @endforeach
        </tbody>
      </table>
</div>

@endsection
