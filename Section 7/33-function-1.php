<?php

$a = 10;

// & passagem de parâmetro por referência
function trocaValor(&$a) {
	$a += 50;

	return $a;
}

echo trocaValor($a)."<br>";
echo trocaValor($a)."<br>";
echo $a;