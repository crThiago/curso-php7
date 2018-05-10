<?php

$pessoa = array(
	'nome' => 'João',
	'idade' => 20
);

foreach ($pessoa as &$p) {
	if (gettype($p) == 'integer') {
		$p += 10;
	}

	echo $p . "<br>";
}

print_r($pessoa);