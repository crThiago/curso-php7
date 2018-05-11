<?php

namespace Cliente;

class Cadastro extends \Cadastro
{
	public function registrarVenda()
	{
		echo "Registrar venda" . $this->getNome();
	}
}