<?php

namespace PHPModern\TesteNamespace;

/**
 * corrigir autoload
 */
require 'Concessionaria.php';

use PHPModern\TesteNamespace\Concessionaria;

$concessionaria = new Concessionaria();

echo $concessionaria->teste();


