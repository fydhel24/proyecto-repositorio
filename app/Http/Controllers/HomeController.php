<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\TipoPrograma;
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
    public function index(Request $request)
    {
        // Obtener el término de búsqueda
        $search = $request->input('search');
        $tiposPrograma = TipoPrograma::all();

        // Obtener solo los documentos que han sido publicados, con búsqueda y limitación a 2
        $documentos = Documento::with('autores.posgraduantes.datosPersonales')
            ->whereHas('publicaciones', function ($query) {
                $query->where('estado', 'publicado');
            })
            ->when($search, function ($query, $search) {
                return $query->where('titulo', 'like', "%{$search}%");
            })
            ->take(10) // Limitar a 2 documentos
            ->get();

        return view('home', compact('documentos', 'search', 'tiposPrograma'));
    }
    public function show($id)
    {
        // Obtener el documento por su ID
        $documento = Documento::findOrFail($id);

        // Retornar la vista con los detalles del documento
        return view('show', compact('documento'));
    }

    public function documentosPorTipoPrograma($tipoProgramaId)
    {
        // Obtener solo los documentos que han sido publicados y pertenecen al tipo de programa dado
        $documentos = Documento::with('autores.posgraduantes.datosPersonales')
            ->whereHas('publicaciones', function ($query) {
                $query->where('estado', 'publicado');
            })
            ->whereHas('programa', function ($query) use ($tipoProgramaId) {
                $query->where('tipo_programa_id', $tipoProgramaId);
            })
            ->get();

        return view('diplomados', compact('documentos'));
    }
    public function diplomados(Request $request)
    {
        $search = $request->input('search');

        $documentos = Documento::with('autores.posgraduantes.datosPersonales')
            ->whereHas('publicaciones', function ($query) {
                $query->where('estado', 'publicado');
            })
            ->whereHas('programa', function ($query) {
                $query->where('tipo_programa_id', 1); // ID para diplomados
            })
            ->when($search, function ($query, $search) {
                return $query->where('titulo', 'like', "%{$search}%");
            })
            ->get();

        return view('diplomados', compact('documentos', 'search'));
    }
    public function maestrias(Request $request)
    {
        $search = $request->input('search');

        $documentos = Documento::with('autores.posgraduantes.datosPersonales')
            ->whereHas('publicaciones', function ($query) {
                $query->where('estado', 'publicado');
            })
            ->whereHas('programa', function ($query) {
                $query->where('tipo_programa_id', 2); // ID para maestrías
            })
            ->when($search, function ($query, $search) {
                return $query->where('titulo', 'like', "%{$search}%");
            })
            ->get();

        return view('maestrias', compact('documentos', 'search'));
    }
    public function doctorados(Request $request)
    {
        $search = $request->input('search');

        $documentos = Documento::with('autores.posgraduantes.datosPersonales')
            ->whereHas('publicaciones', function ($query) {
                $query->where('estado', 'publicado');
            })
            ->whereHas('programa', function ($query) {
                $query->where('tipo_programa_id', 3); // ID para maestrías
            })
            ->when($search, function ($query, $search) {
                return $query->where('titulo', 'like', "%{$search}%");
            })
            ->get();

        return view('doctorados', compact('documentos', 'search'));
    }
    public function posdoctorados(Request $request)
    {
        $search = $request->input('search');

        $documentos = Documento::with('autores.posgraduantes.datosPersonales')
            ->whereHas('publicaciones', function ($query) {
                $query->where('estado', 'publicado');
            })
            ->whereHas('programa', function ($query) {
                $query->where('tipo_programa_id', 4); // ID para maestrías
            })
            ->when($search, function ($query, $search) {
                return $query->where('titulo', 'like', "%{$search}%");
            })
            ->get();

        return view('posdoctorados', compact('documentos', 'search'));
    }
    /* public function especialidades(Request $request)
    {
        $search = $request->input('search');

        $documentos = Documento::with('autores.posgraduantes.datosPersonales')
            ->whereHas('publicaciones', function ($query) {
                $query->where('estado', 'publicado');
            })
            ->whereHas('programa', function ($query) {
                $query->where('tipo_programa_id', 5); // ID para maestrías
            })
            ->when($search, function ($query, $search) {
                return $query->where('titulo', 'like', "%{$search}%");
            })
            ->get();

        return view('especialidades', compact('documentos', 'search'));
    } */
}
