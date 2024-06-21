
@extends('layouts.app')
@section('titulo','home')
@section('content')
    <a class="btn btn-success" href="{{ route('posts.create') }}">Crear nuevo post</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">titulo</th>
      <th scope="col">contenido</th>

    </tr>
  </thead>
  <tbody>
        @foreach ($posts as $post)
        <tr>
        <td>{{ $post->id}}</td>
          <td> <h4>{{ $post->title }}</h4></td>
         <td>
                <a class="btn btn-warning" href="{{ route('posts.edit', $post->id) }}">Editar</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
        </td>
        </tr>
        @endforeach
  </tbody>
</table>
@endsection
