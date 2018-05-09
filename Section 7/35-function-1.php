<?php

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			// Inicio: Diretor Comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					// Inicio: Gerente de vendas	
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					// Termino: Gerente de vendas
				)
			),
			// Termina: Diretor Comercial
			// Inicio: Gerente Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
					// Inicio: Gerente de Contas a Pagar
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' => array(
							//Inicio: Supervisor de Pagamentos
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
							)
							//Termino: Supervisor de Pagamentos
						)
					),
					// Termino: Gerente de Contas a Pagar
					// Inicio: Gerente de Compras
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							// Inicio: Supervisor de Suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos'
							)
							// Termino: Supervisor de Suprimentos
						)
					)
					// Termino: Gerente de Compras
				)
			)
			// Termino: Gerente Financeiro
		)
	)
);

function exibe($cargos) 
{
	$html = '<ul>';
	foreach ($cargos as $cargo) {
		$html .= '<li>'; 
		$html .= $cargo['nome_cargo'];
		$html .= '</li>';
		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
			$html .= exibe($cargo['subordinados']); 
		}
	}
	$html .= '</ul>';

	return $html;
}

echo exibe($hierarquia);