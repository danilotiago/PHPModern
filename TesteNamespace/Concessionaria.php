<?php

namespace PHPModern\TesteNamespace;

/**
 * corrigir autoload
 */
require 'Chevrolet/Produtos/Carro.php';

use PHPModern\TesteNamespace\Chevrolet\Produtos\Carro;

class Concessionaria
{
    public function teste()
    {
        $carro = new Carro();

        return 'Carro: ' . $carro;
    }
}