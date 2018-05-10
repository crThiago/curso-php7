<?php

function soma(int ...$valores) {
	return array_sum($valores);
}

echo soma(2, 2, 3)."<br>";
echo soma(2, "2")."<br>";
// echo soma("a", "b", "c")."<br>"; erro
echo soma(2, 3.5)."<br>";

