<?php

interface Veiculo 
{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($velocidade);	
}

class Civic implements Veiculo 
{
	public function acelerar($v)
	{
		echo "O veículo acelerou até $v km/h";
	}

	public function frenar($v)
	{
		echo "O veículo frenou até $v km/h";
	}

	public function trocarMarcha($m)
	{
		echo "O veículo engatou a marcha $m";
	}
}

$carro = new Civic();

$carro->trocarMarcha(1);