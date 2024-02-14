@extends('layouts.plantilla')
@section('title', 'Create')
@section('content')
<h1>En esta página podremos crear comics.</h1>
<form action="{{route('comics.store')}}" method="POST">
<!-- CSRF - This token is used to verify that the authenticated user is the person actually making the requests to the application. Since this token is stored in the user's session and changes each time the session is regenerated, a malicious application is unable to access it. -->
@csrf
  <label for="titulo">Titulo: </label>
  <input type="text" id="titulo" name="titulo"><br><br>
  <label for="coleccion">Colección: </label>
  <input type="text" id="coleccion" name="coleccion"><br><br>
  <label for="genero">Género: </label>
  <textarea name="genero" row="5" id="genero"></textarea> <br><br>
  <!-- Boton -->
  <button type="submit">Agregar Comic</button>
  </form>

@endsection