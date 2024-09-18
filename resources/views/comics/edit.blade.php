@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>Modifica : {{ $comic->title }} </h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $comic->title }}">
        <input type="text" name="description" value="{{ $comic->description }}">
        <button type="submit">Update</button>
    </form>
</div>
@endsection