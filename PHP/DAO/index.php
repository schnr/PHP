<?php

require_once ("config.php");

//Carrega um usuario apenas

/*
$root = new Usuario();

$root->loadById(3);

echo $root;
*/

//carrega a lista de usuarios
/*$lista = Usuario::getList();

echo json_encode($lista);
*/

//carrega uma lista de usuarios buscando pelo login
/*$search = Usuario::search("O");

echo json_encode($search);
*/

//carrega um usuario usando o login e a senha
/*
$usuario = new Usuario();
$usuario->login("Odair", "aoba1234");

echo $usuario;
*/

//insere usuario
/*
$aluno = new Usuario("TESTE", "TESTE");

$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("enzo","toptoptop");

echo $usuario;

?>