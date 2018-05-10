<?php

// LC_ALL para tudo abaixo
// LC_COLLATE para comparação de strings, veja strcoll()
// LC_CTYPE para classificação de caracteres e conversão, por exemplo strtoupper()
// LC_MONETARY para localeconv()
// LC_NUMERIC para o separador decimal (Veja também localeconv())
// LC_TIME para formatação de data e hora com strftime()

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B"))."<br>";// função é traduzida
echo date("l F"); // função não sobre alteração 
