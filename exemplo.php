<?php
use \matheusferreira\DigitalCep\Search;

require_once "vendor/autoload.php";

$busca = new Search;

$resultado = $busca->getAddresFromZipcode('91180550');

print_r($resultado);