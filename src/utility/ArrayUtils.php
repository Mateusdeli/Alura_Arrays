<?php declare(strict_types=1);

namespace Alura\Utility;

class ArrayUtils {

    public static function remover(string $element, array &$array)
    {
        $position = array_search($element, $array, true);
        if (is_int($position)) {
            unset($array[$position]);
        }else {
            echo "Não foi encontrado esse elemento no array.";            
        }
    }

    public static function encontrarPessoasSaldoMaior(int $saldo, array $array) : array {

        $correntistas = array();

        foreach ($array as $key => $value) {
            if ($value > $saldo) {
                $correntistas[] = $key;
            }
        }

        return $correntistas;

    }

}