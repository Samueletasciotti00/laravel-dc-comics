@extends('layouts.main')

@section('content')

<!-- Title -->
<h1 class="focus">{{ $comic->title }}</h1>

<!-- Image -->
<div class="text-center">
    <img class="img" src="{{ $comic->thumb }}" alt="">
</div>

<!-- Description -->
<div class="box">
<p>{{ $comic->description }}</p>
</div>

@endsection