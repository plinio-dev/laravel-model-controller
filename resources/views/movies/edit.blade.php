@extends('layouts.base')

@section('pageTitle')
   Modifica film: {{$movie->title}}
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

   <form action="{{route('movies.update', ['movie' => $movie->id])}}" method="POST">
      @method('PUT')
      @csrf
      <div class="form-group">
			<label for="cover_image">Immagine Cover</label>
			<img src="{{$movie->cover_image}}" alt="" style="width: 100px">
			<input type="text" class="form-control" id="cover_image" name="cover_image" placeholder="URL Immagine" value="{{old('cover_image') ? old('cover_image') : $movie->cover_image}}">
		</div>
      <div class="form-group">
			<label for="title">Titolo</label>
			<input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{old('title') ? old('title') : $movie->title}}">
		</div>
		<div class="form-group">
			<label for="author">Regista</label>
			<input type="text" class="form-control" id="author" name="author" placeholder="Regista" value="{{old('author') ? old('author') : $movie->author}}">
		</div>
		<div class="form-group">
			<label for="genre">Generi</label>
			<input type="text" class="form-control" id="genre" name="genre" placeholder="Generi" value="{{old('genre') ? old('genre') : $movie->genre}}">
		</div>
		<div class="form-group">
			<label for="description">Trama</label>
			<textarea class="form-control" id="plot" name="description" rows="8" placeholder="Trama...">{{old('description') ? old('description') : $movie->description}}</textarea>
		</div>
		<div class="form-group">
			<label for="year">Anno</label>
			<select class="form-control" id="year" name="year">
				@for ($i = 1900; $i <= date("Y") + 1; $i++)
					<option value="{{$i}}" {{ old('year') == $i || $movie->year == $i ? 'selected' : '' }}>{{$i}}</option>
				@endfor
			</select>
		</div>

		<button type="submit" class="btn btn-primary">Salva</button>
	</form>
@endsection