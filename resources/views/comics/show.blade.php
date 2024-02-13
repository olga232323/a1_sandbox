@extends('layouts.plantilla')
@section('title', 'Show')
@section('content')
<h1>Bienvenido al comic {{$comic->nombre}}</h1>
<a href="{{route('comics.index')}}">Vovler a página de comics</a></br>
<a href="{{route('comics.create')}}">Crear comic nuevo</a></br>
<form action="{{route('comics.destroy', $comic)}}" method="post">
  <!-- CSRF - This token is used to verify that the authenticated user is the person actually making the requests to the application. Since this token is stored in the user's session and changes each time the session is regenerated, a malicious application is unable to access it. -->
  @csrf
  <!-- Directiva de laravel que especifíca el método que vamos a utilizar para enviar el formulario -->
  @method('delete')
  <button type="submit">Eliminar comic</button>
</form>
<a href="{{route('comics.edit', $comic->id)}}" method="get">Editar comic</a>
<!-- Mensaje comic actualizado correctamente -->
@if (session('mensaje'))
<div class="alert alert-success">
  {{ session('mensaje') }}
</div>
@endif

<p><strong> Categoria: </strong> {{$comic->cagtegoria}}</p>
<p>{{$comic->descripcion}}</p>
@endsection