<?php

require_once("config.php");
//Carrega um Usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root

//Carrega uma lista de Usuários
//$lista = Usuario::getList();
//echo json_encode($lista);
 
//Carrega uma lista de usuários buscando pelo Login
//$search = Usuario::search("ri");
//echo json_encode($search);

//Carrega um usuário usando o Login e a Senha
//$usuario = new Usuario();
//$usuario->login("ricardo", "12233111");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("Aluninho", "2758");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadbyId(8);

$usuario->update("professor", "akrllll");

echo $usuario

 ?>