<?php
$anoNascimento = 1990;

$nome = "Thiago";

$sobrenome = "Rodrigues";

$nomeCompleto = $nome." ".$sobrenome;

echo "$nomeCompleto <br>";

unset($nomeCompleto);

if (isset($nomeCompleto)) {
	echo $nomeCompleto;
}