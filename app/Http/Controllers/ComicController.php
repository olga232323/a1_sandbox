<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Http\Request;
use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->paginate();
        // $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic')); // Si llamas a las variables con el mismo nombre con el que las envias, puedes usar la función compact
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comic  = new Comic(); // Instanciar un objeto de la clase comic
        $comic->titulo = $request->titulo;
        $comic->coleccion = $request->coleccion;
        $comic->genero = $request->genero;

        $comic->save(); // Guarda en la base de datos
        return redirect()->route('comics.show', [$comic]); // Redirecciona a la vista del curso creado con parámetro
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic) // Instanciamos el objeto comic al llamar la función
    {
        $comic->titulo = $request->titulo;
        $comic->coleccion = $request->coleccion;
        $comic->genero = $request->genero;
        $comic->save();
        return redirect()->route('comics.show', [$comic])->with("mensaje", "Comic actualizado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index', $comic)->with('info', 'El registro se eliminó correctamente');
    }
}
