<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES (:LOGIN, :PASS)");

$login = "jose";
$pass = 1232343;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASS", $pass);

$stmt->execute();

echo "Inserido OK!";