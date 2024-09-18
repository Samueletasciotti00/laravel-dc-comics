@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>Modifica : {{ $comic->title }} </h1>

    <form class="py-5" action="{{ route('comics.store') }}" method="POST">

        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Titolo</label>
            <input class="form-control" type="text" id="" value="{{ $comic->title }}" name="title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Prezzo</label>
            <input class="form-control" type="text" id="" value="{{ $comic->price }}" name="price">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descrizione</label>
            <textarea class="form-control" name="" id="" cols="30" rows="10" name="description"> {{ $comic->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">THUMB</label>
            <input class="form-control" id="" type="text" value="{{ $comic->thumb }}" name="thumb">
        </div>

        <button type="submit">SAVE</button>
    </form>
</div>
@endsection