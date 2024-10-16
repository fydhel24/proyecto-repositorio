<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /* public function index()
    {
        // Obtener solo los documentos que han sido publicados
        $documentos = Documento::whereHas('publicaciones', function ($query) {
            $query->where('estado', 'publicado');
        })->get();

        return view('home', compact('documentos'));
    } */
    public function index()
    {
        // Obtener solo los documentos que han sido publicados junto con sus autores
        $documentos = Documento::with('autores.posgraduantes.datosPersonales') // Cargar la relación de autores
            ->whereHas('publicaciones', function ($query) {
                $query->where('estado', 'publicado');
            })
            ->get();

        return view('home', compact('documentos'));
    }
    public function show($id)
    {
        // Obtener el documento por su ID
        $documento = Documento::findOrFail($id);

        // Retornar la vista con los detalles del documento
        return view('show', compact('documento'));
    }
}
