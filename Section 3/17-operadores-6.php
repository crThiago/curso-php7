<?php

$a = NULL;
$b = NULL;
$c = 10;



/** NULL 
* caso $a for null verifica $b se $b for null verifica $c
* evita problema de notice do php
*/
echo $x ?? $a ?? $b ?? $c;