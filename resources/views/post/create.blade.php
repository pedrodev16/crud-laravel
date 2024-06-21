{{-- resources/views/posts/create.blade.php --}}
@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" >
      
        @if ($errors->has('title'))
            <div>{{ $errors->first('title') }}</div>
        @endif

        <label for="content">Contenido:</label>
        <textarea class="form-control" name="content" id="content" >{{ old('content') }}</textarea>
       
        @if ($errors->has('content'))
            <div>{{ $errors->first('content') }}</div>
        @endif

        <button class="btn btn-primary" type="submit">Crear</button>
    </form>
@endsection
