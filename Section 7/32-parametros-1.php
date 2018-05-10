<?php

function ola($var = "mundo", $periodo = "Bom dia") {
	return "Olá $var! $periodo <br>";
}

echo ola();
echo ola("", "Boa noite");
echo ola("function", "Boa tarde");
echo ola("function2", "Bom dia");
echo ola("function2", "");