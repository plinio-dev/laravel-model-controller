@extends('layouts.base')

@section('pageTitle')
    Lista dei nostri film
@endsection

@section('content')
   <table class="table table-striped">
      <thead>
         <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Regista</th>
            <th scope="col">Generi</th>
            <th scope="col">Azioni</th>
         </tr>
      </thead>
      @foreach ($movies as $movie)
      <tr>
         <td>{{$movie->title}}</td>
         <td>{{$movie->author}}</td>
         <td>{{$movie->genre}}</td>
         <td><a href="{{route('movies.show', [ 'movie' => $movie->id ])}}">Dettaglio film</a></td>
      </tr>   
      @endforeach
   </table> 
@endsection
