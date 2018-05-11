<?php

class Pessoa 
{

	public $nome;

	public function falar() 
	{

		return "O meu nome é ".$this->nome;

	}
}

$p1 = new Pessoa();
$p1->nome = "Glaucio Daniel";
echo $p1->falar();