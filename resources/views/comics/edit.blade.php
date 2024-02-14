@extends('layouts.plantilla')
@section('title', 'Edit')
@section('content')
<h1>Editando comic</h1>
<form action="{{route('comics.update', $comic)}}" method="POST">
  <!-- CSRF - This token is used to verify that the authenticated user is the person actually making the requests to the application. Since this token is stored in the user's session and changes each time the session is regenerated, a malicious application is unable to access it. -->
  @csrf
  <!-- Directiva de laravel que especifíca el método que vamos a utilizar para enviar el formulario -->
  @method('put')
  <label for="titulo">Titulo: </label>
  <input type="text" id="titulo" name="titulo" value="{{$comic->titulo}}"><br><br>
  <label for="coleccion">Colección: </label>
  <input type="text" id="coleccion" name="coleccion" value="{{$comic->coleccion}}"><br><br>
  <label for="genero">Género: </label>
  <textarea name="genero" row="5" id="genero">{{$comic->genero}}</textarea><br><br>
  <!-- Boton -->
  <button type="submit">Actualizar comic</button>
</form>
@endsection