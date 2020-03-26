<?php


namespace App\Services;


use App\Episodios;
use App\Serie;
use App\Temporadas;
use Illuminate\Support\Facades\DB;

class RemovedorDeSerie
{
    public function removerSerie(int $serieId)
    {
        $nomeSerie = '';
        DB::transaction(function () use ($serieId, &$nomeSerie) {
            $serie = Serie::query()->where('id', '=', $serieId)->first();
            $this->removerTemporadas($serie);
            $serie->delete();
        });
    }

    /**
     * @param $serie
     */
    private function removerTemporadas(Serie $serie): void
    {
        $serie->temporadas->each(function (Temporadas $temporada) {
            $this->removerEpisodios($temporada);
            $temporada->delete();
        });
    }

    /**
     * @param Temporadas $temporada
     */
    private function removerEpisodios(Temporadas $temporada): void
    {
        $temporada->episodios->each(function (Episodios $episodio) {
            $episodio->delete();
        });
    }
}
