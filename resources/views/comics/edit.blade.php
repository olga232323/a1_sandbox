@extends('layouts.plantilla')
@section('title', 'Edit')
@section('content')
<h1>Editando comic</h1>
<form action="{{route('comics.update', $comic)}}" method="POST">
  <!-- CSRF - This token is used to verify that the authenticated user is the person actually making the requests to the application. Since this token is stored in the user's session and changes each time the session is regenerated, a malicious application is unable to access it. -->
  @csrf
  <!-- Directiva de laravel que especifíca el método que vamos a utilizar para enviar el formulario -->
  @method('put')
  <label for="nombre">Nombre: </label>
  <input type="text" id="nombre" name="nombre" value="{{$comic->nombre}}"><br><br>
  <label for="categoria">Categoría: </label>
  <input type="text" id="categoria" name="categoria" value="{{$comic->categoria}}"><br><br>
  <label for="descripcion">Descripción: </label>
  <textarea name="descripcion" row="5" id="descripcion">{{$comic->descripcion}}</textarea><br><br>
  <!-- Boton -->
  <button type="submit">Actualizar comic</button>
</form>
@endsection