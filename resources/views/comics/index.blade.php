@extends('layouts.main')

@section('content')

<h1>Comics List</h1>

<!-- Mi stampo tutti i fumetti con i dati che arrivano dal controller -->
<div id="fumetti" class="container my-5 shadow">
  <table class="table">
    <thead>
      <tr>
        <th class="text-primary" scope="col">#ID</th>
        <th class="text-primary" scope="col">Title</th>
        <th class="text-primary" scope="col">Description</th>
        <th class="text-primary" scope="col">Cover</th>
        <th class="text-primary" scope="col">Price</th>
        <th class="text-primary" scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
      <tr>
        <th>{{ $comic->id }}</th>
        <td><h3>{{ $comic->title }}</h3></td>
        <td>{{ $comic->description }}</td>
        <td>
          <img class="img_poster" src="{{ $comic->thumb }}" alt="dog">
        </td>
        <td class="text-danger">{{ $comic->price }}</td>
        <td>
          <!-- Info -->
          <a href="{{ route('comics.show', $comic) }}"> <button><i class="fa-solid fa-eye" style="color: #63E6BE;"></i></button></a></i>

          <!-- Modify -->
          <a href="{{ route('comics.edit', $comic) }}"> <button><i class="fa-solid fa-gear" style="color: orange;"></i></button></a></i>

          <!-- Delete -->
           <!-- Modify -->
           @include('partials.form_delete')
           <a> <button><i class="fa-solid fa-fire" style="color: tomato;"></i></button></a></i>
        </td>
      </tr>


      @endforeach

    </tbody>
  </table>
</div>
@endsection