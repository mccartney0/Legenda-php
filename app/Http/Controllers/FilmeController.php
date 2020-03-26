<?php

namespace App\Http\Controllers;

use App\filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $filmes = Filme::query()->orderBy('titulo')->get();
        return view('filmes.filmes', compact('filmes'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Filme::create([
            'titulo'=>$request->titulo,
            'data_lancamento'=>$request->data_lancamento,
        ]);

        return redirect()->route('filmes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conteudo  $conteudo
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Request $request)
    {
        $filme = Filme::query()->where('titulo','=', $request->pesquisa)->first();
        return view('pesquisa', compact('filme'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conteudo  $conteudo
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Request $request)
    {
        Filme::destroy($request->id);

        return redirect()->route('filmes');
    }
}
