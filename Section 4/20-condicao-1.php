<?php

$qualSuaIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca) {

	echo "Criança";
} elseif($qualSuaIdade < $idadeMaior) {

	echo "Adolescente";

} elseif($qualSuaIdade < $idadeMaior) {

	echo "Adulto";

} else {

	echo "Não é Criança";

}


echo "<br>";

echo ($qualSuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de idade";