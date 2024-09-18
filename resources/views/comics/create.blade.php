@extends('layouts.main')

@section('content')
<h1>Create</h1>

<form action="{{route('comics.store')}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $comic->title }}">
        <input type="text" name="description" value="{{ $comic->description }}">
        <button type="submit">Update</button>
    </form>
@endsection