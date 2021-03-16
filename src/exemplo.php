<?php

require_once "../vendor/autoload.php";

use Koz\DigitalCep\Search;

$busca = new Search;

$reaultado = $busca->getAddressFromZipcode('21610310');

print_r($reaultado);