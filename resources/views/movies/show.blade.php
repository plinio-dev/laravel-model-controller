@extends('layouts.base')

@section('pageTitle')
   {{$movie->title}}
@endsection

@section('content')
   <h2>{{$movie->year}}</h2>  
   <a href="{{route('movies.index')}}">Torna all'home page</a>
   <p>{{$movie->description}}</p>
@endsection