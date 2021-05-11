<?php
require "vendor/autoload.php";

use Casa\DigitalCep\Search;
$busca = new Search;
$resultado = $busca->getAddressFromZipcode('01001000');
print_r($resultado);