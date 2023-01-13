<?php 
date_default_timezone_set('America/Sao_Paulo');
// variáveis com dados para conexão ao banco de dados phpMyAdmin
$bancodedados = "php_login";
$servidor = "localhost";
$usuario = "root";
$senha = "";

/*
 Dados Para Teste
 Usuário = teste@gmail.com
 senha = 123
 */
//Script para autenticação no banco de dados
try {
	$pdo = new PDO("mysql:dbname=$bancodedados; host=$servidor", "$usuario", "$senha");
} catch (Exception $e) {
	echo 'Erro ao conectar com o Banco de Dados! <br><br>' .$e;
}

 ?>