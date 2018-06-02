<?php
require_once("config.php");

//**Retorna um usuário**/
/*$usuario = new Usuario();
$usuario->loadById(5);
echo $usuario;*/

// Retorna uma lista de usuários;
// $usuarios = new Usuario();
// echo json_encode($usuarios->getList());
// echo("<br><br>");
// $usuarios = Usuario::getList();
// echo json_encode($usuarios);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("te");
// echo json_encode($search);

//Carrega um usuário usuando o login e a senha
// $usuario = new Usuario();
// $usuario->login("teste", "1");
// echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario('Ana', '@n@');
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(5);
$usuario->update("Professor", "520455");
echo $usuario;