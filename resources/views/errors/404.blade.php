@extends('layout.main')

@section('content')
<div class="container d-flex flex-column justify-content-center my-5">

    <h1>Errore 404 nell'accedere ai dati</h1>
    <h2>{{ $exception->getMessage() }}</h2>
</div>
@endsection
