@extends('layouts.plantilla')
@section('title', 'Index')
@section('content')
<h1>Bienvenido a la página principal.</h1>
<link href="https://unpkg.com/tailwindcss@%5E2.0/dist/tailwind.min.css" rel="stylesheet">

<ul>
  @foreach ($comics as $comic)
  {{-- Listado de comics dos maneras --}}
  {{-- <li>{{$loop->index}}: {{$comic['nombre']}} ({{$comic['descripcion']}})</li> --}}
  <li>{{$comic->id}} <a href="{{route('comics.show', $comic->id)}}">{{$comic->nombre}}</a></li>
  @endforeach
</ul>
{{$comics->links()}}

{{-- Paginación con Laravel --}}
@endsection