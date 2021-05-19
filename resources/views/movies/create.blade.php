@extends('layouts.base')

@section('pageTitle')
   Aggiungi un nuovo film
@endsection

@section('content')

   @if ($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif

   <form action="{{route('movies.store')}}" method="POST">
      @method('POST')
      @csrf
      <div class="form-group">
         <label for="cover_image">Cover image</label>
         <input type="text" class="form-control" id="cover_image" name="cover_image" placeholder="URL Immagine">
      </div>
      <div class="form-group">
         <label for="title">Title</label>
         <input type="text" class="form-control" id="title" name="title" placeholder="Title">
      </div>
      <div class="form-group">
         <label for="film_director">Director</label>
         <input type="text" class="form-control" id="author" name="author" placeholder="Director">
      </div>
      <div class="form-group">
         <label for="genre">Genre</label>
         <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre">
      </div>
      <div class="form-group">
         <label for="plot">Plot</label>
         <textarea class="form-control" id="description" name="description" rows="8" placeholder="Plot..."></textarea>
      </div>
      <div class="form-group">
         <label for="year">Year</label>
         <select class="form-control" id="year" name="year">
            @for ($i = 1900; $i <= date("Y") + 1; $i++)
               <option value="{{$i}}">{{$i}}</option>
            @endfor
         </select>
      </div>

      <button type="submit" class="btn btn-primary">Salva</button>
   </form>
@endsection