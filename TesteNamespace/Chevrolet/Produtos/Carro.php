<?php

namespace PHPModern\TesteNamespace\Chevrolet\Produtos;

class Carro
{
    private $cor;

    public function __construct($cor = 'branco')
    {
        $this->cor = $cor;
    }

    public function __toString()
    {
        return $this->cor;
    }
}
