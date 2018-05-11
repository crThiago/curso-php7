<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@teste.com.br");
$cad->setSenha("123");

$cad->registrarVenda();