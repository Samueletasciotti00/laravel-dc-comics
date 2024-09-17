@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>Modifica : {{ $comic->title }} </h1>

    <form class="py-5" action="{{ route('comics.store') }}" method="POST">

        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Titolo</label>
            <input class="form-control" type="text" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Prezzo</label>
            <input class="form-control" type="text" id="" multiple>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descrizione</label>
            <input class="form-control" type="text" id="" disabled>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">PATH</label>
            <input class="form-control" id="" type="text">
        </div>
    </form>
</div>
@endsection