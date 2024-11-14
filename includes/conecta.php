<?php
// parâmetros de acesso ao servidor
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "microblog_ruan";

//acessar a função de conexão ao servidor de BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//Definindo o Charset UTF-8 para a Conexão
mysqli_set_charset($conexao, "utf8");

// verificando a conexão
if( $conexao === false ){
    die("Erro: ".mysqli_connect_error());
} else{
    echo "Beleza, Segue o Jogo...";
}

