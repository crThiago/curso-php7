<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET des_login = :login, des_senha = :pass WHERE id_usuario = :id");

$login = "jose";
$pass = 1232343;
$id = 2;

$stmt->bindParam(":login", $login);
$stmt->bindParam(":pass", $pass);
$stmt->bindParam(":id", $id);

$stmt->execute();

echo "Alteração OK!";