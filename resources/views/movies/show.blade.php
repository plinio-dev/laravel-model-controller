
@extends('layouts.base')

@section('pageTitle')
   <h1>{{$movie->title}}</h1>
@endsection

@section('content')
   <a href="{{route('movies.index')}}">Torna all'home page</a>
   <p>{{$movie->description}}</p>
@endsection

