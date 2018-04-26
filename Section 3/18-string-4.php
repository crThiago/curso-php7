<?php

$frase = "A repetição é a mãe da repetição";

$palavra = "mãe";

$q = strpos($frase, $palavra);
$parteTexto = substr($frase, 0, $q);
var_dump($parteTexto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);
