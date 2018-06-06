<?php

//$file = fopen("log.txt", "w+"); // w - write escreve e + cria arquivo
$file = fopen("log.txt", "a+"); // a - add adiciona conteúdo no final do arquivo e + cria arquivo

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso";
