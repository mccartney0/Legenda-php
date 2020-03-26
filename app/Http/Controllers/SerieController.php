<?php

namespace App\Http\Controllers;

use App\serie;
use App\Services\CriadorDeSerie;
use App\Services\RemovedorDeSerie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $series = Serie::query()->orderBy('titulo')->get();

        return view('series.series', compact('series'));
    }

    public function store( Request $request, CriadorDeSerie $criadorDeSerie)
    {
        $serie = $criadorDeSerie->criarSerie(
            $request->titulo,
            $request->qtd_temporadas,
            $request->ep_por_temporada
        );

        return redirect()->route('series');
    }

    public function destroy(Request $request, RemovedorDeSerie $removedorDeSerie)
    {
        $nomeSerie = $removedorDeSerie->removerSerie($request->id);
        return redirect()->route('series');
    }
}
