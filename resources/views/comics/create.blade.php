@extends('layouts.main')

@section('content')
<h1>Create</h1>

<form action="{{route('comics.store')}}" method="POST">
        @csrf
        <input type="text" name="title">
        <input type="text" name="description">
        <button type="submit">Update</button>
    </form>
@endsection