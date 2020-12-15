<?php

namespace Alura\Service;

class CalculadoraService {

    public function calcularMedia(array $notas) : ?float
    {
        $quantidadeNotas = sizeof($notas);

        if ($quantidadeNotas > 0) {    
            $totalSoma = 0;

            for ($i=0; $i < $quantidadeNotas ; $i++) { 
                $totalSoma += $notas[$i];
            }

            $media = $totalSoma / $quantidadeNotas;
            return $media;
        }
        else {
            return null;
        }
    }

}