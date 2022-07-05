@extends('layout.main')

@section('content')

<div class="container index py-5">

    @if (session('delete_product'))

    <div class="debug delated-product py-3 d-flex justify-content-center">
        <h2>{{ session('delete_product') }}</h2>
    </div>
    @endif


    <h1>Comics List</h1>

    <div class="container-fluid">
        <div class="row flex-wrap">

            @foreach ($comics as $comic)
            <div class="col-12 col-md-6 col-lg-4 mb-3 p-2">
                <div class="box d-flex justify-content-center flex-column align-items-center py-3 text-center">
                    <p class="_badge">{{ $comic->id }}</p>
                    <img src="{{ $comic->image }}" alt="{{ $comic->title }}" class="img-fluid mb-3">
                    <h5>Title: {{ $comic->title }}</h5>
                    <h5>Type: {{ $comic->type }}</h5>
                    <div class="py-2">

                        <a href="{{ route('comics.show', $comic) }}" type="button" class="btn btn-primary">View More</a>
                        <a href="{{ route('comics.edit', $comic) }}" type="button" class="btn btn-light">Edit</a>
                        <form class="d-inline" action="{{ route('comics.destroy', $comic) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler procedere conl\'eliminazione di {{ $comic->title }}?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-dark">Delete</button>
                        </form>
                    </div>
                </div>




            </div>
            @endforeach

        </div>
    </div>


        </tbody>
      </table>
</div>

@endsection
