<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY des_login");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, $key);
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . PHP_EOL);

foreach ($usuarios as $row) {
	$data = array();
	
	foreach ($row as $key => $value) {
		array_push($data, $value);
	}

	fwrite($file, implode(",", $data) . PHP_EOL);
}

fclose($file);