<?php
abstract class Automovel
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