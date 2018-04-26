<?php
$pessoas = array();

array_push($pessoas, array(
	"Nome" => "João",
	"idade" => 25
));


array_push($pessoas, array(
	"Nome" => "Maria",
	"idade" => 25
));


echo json_encode($pessoas);