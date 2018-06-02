<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :id");
$id = 1;

$stmt->bindParam(":id", $id);

$stmt->execute();

echo "Deletado OK!";