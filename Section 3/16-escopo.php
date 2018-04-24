<?php

$nome = "João";

function teste() {

	global $nome;
	echo $nome;

}

function teste2() {
	$nome = "Maria";
	echo $nome." Agora no teste2";
}


teste();
teste2();