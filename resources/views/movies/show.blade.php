
@extends('layouts.base')

@section('pageTitle')
   {{$movie->title}}
@endsection

@section('content')
   <a href="{{route('movies.index')}}">Torna all'home page</a>
   <p>{{$movie->description}}</p>
@endsection

