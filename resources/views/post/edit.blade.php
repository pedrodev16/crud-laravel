{{-- resources/views/posts/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        


        <label for="title">Título:</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ empty($post->title)?old('title'):$post->title }}" >
      
        @if ($errors->has('title'))
            <div>{{ $errors->first('title') }}</div>
        @endif

        <label for="content">Contenido:</label>
        <textarea class="form-control" name="content" id="content" >{{ empty($post->title)?old('title'):$post->title }}</textarea>
       
        @if ($errors->has('content'))
            <div>{{ $errors->first('content') }}</div>
        @endif




        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>
@endsection
