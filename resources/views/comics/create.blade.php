@extends('layouts.plantilla')
@section('title', 'Create')
@section('content')
<h1>En esta página podremos crear comics.</h1>
<form action="{{route('comics.store')}}" method="POST">
<!-- CSRF - This token is used to verify that the authenticated user is the person actually making the requests to the application. Since this token is stored in the user's session and changes each time the session is regenerated, a malicious application is unable to access it. -->
@csrf
  <label for="nombre">Nombre: </label>
  <input type="text" id="nombre" name="nombre"><br><br>
  <label for="categoria">Categoría: </label>
  <input type="text" id="categoria" name="categoria"><br><br>
  <label for="descripcion">Descripción: </label>
  <textarea name="descripcion" row="5" id="descripcion"></textarea> <br><br>
  <!-- Boton -->
  <button type="submit">Agregar Comic</button>
  </form>

@endsection