<?php

$nameDir = "images";

if (!is_dir($nameDir)) {

	mkdir($nameDir);
	echo "diretório criado com sucesso";

} else {

	rmdir($nameDir);
	echo "Já existe o diretório: $nameDir foi removido com sucesso";

}