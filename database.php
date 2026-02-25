<?php
// Variaveis com os parâmetros de conexão ao BD
    $servidor ="localhost";
    $servidor_user="root";
    $servidor_passworld="";
    $database_name="sge_yurithemaster";

// Constante
define('SERVIDOR','localhost');
define('SERVIDOR_USER','root');
define('PASSWORD','');
define('DATABASE','sge_yurithemaster');

// Criar uma função para conectar com o BD
$conexao = mysqli_connect($servidor,$servidor_user,$servidor_passworld,$database_name);

// Criar uma função de conexão ultilizando constantes
$conexao_def = mysqli_connect(SERVIDOR, SERVIDOR_USER, PASSWORD, DATABASE);

// Criar uma função de conexão de forma direta
$conexao_manual = mysqli_connect('localhost', 'root', '', 'sge_yurithemaster');


