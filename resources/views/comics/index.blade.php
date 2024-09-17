@extends('layouts.main')

@section('content')

<h1>Comics List</h1>

<!-- Mi stampo tutti i fumetti con i dati che arrivano dal controller -->
<div class="container my-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">title</th>
      <th scope="col">price</th>
      <th scope="col">description</th>
      <th scope="col">Cover</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic)
    <tr>
      <th>{{ $comic->id }}</th>
      <td>{{ $comic->title }}</td>
      <td class="text-danger">{{ $comic->price }}</td>
      <td>{{ $comic->description }}</td>
      <td><img class="img_poster" src="{{ $comic->thumb }}" alt="dog"></td>
      <td>
        <!-- Info -->
       <a href="{{ route('comics.show', $comic) }}"> <button><i class="fa-solid fa-eye" style="color: #63E6BE;"></i></button></a></i>

        <!-- Modify -->
        <a href="{{ route('comics.edit', $comic) }}"> <button><i class="fa-solid fa-gear" style="color: orange;"></i></button></a></i>

        <!-- Delete -->
        <button><i class="fa-solid fa-fire" style="color: tomato;"></i></button>

      </td>
    </tr>

    
    @endforeach
    
  </tbody>
</table>
</div>
@endsection