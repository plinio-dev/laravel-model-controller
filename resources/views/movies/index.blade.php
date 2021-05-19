@extends('layouts.base')

@section('pageTitle')
    Lista dei nostri film
@endsection

@section('content')

<div class="mb-3 text-right">
	<a href="{{route('movies.create')}}"><button type="button" class="btn btn-success">Aggiungi Film</button></a>
</div>
   <table class="table table-striped">
      <thead>
         <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Regista</th>
            <th scope="col">Generi</th>
            <th scope="col">Azioni</th> 
         </tr>
      </thead>
      <tbody>
         @foreach ($movies as $movie)
            <tr>
               <td>{{$movie->title}}</td>
               <td>{{$movie->author}}</td>
               <td>{{$movie->genre}}</td>
               <td><a href="{{route('movies.show', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
            </tr>   
         @endforeach   
      </tbody>
   </table> 
 
@endsection
