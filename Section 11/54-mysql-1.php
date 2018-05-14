<?php

$conn = new mysqli("127.0.0.1", "root", "", "dbphp7");

if ($conn->connect_error){
	echo "Error: ". $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES (?, ?)");
$stmt->bind_param("ss", $login, $pass);
// $stmt->bind_param("ss", "user", "1234"); // ERROR

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "#!@#$";

$stmt->execute();
