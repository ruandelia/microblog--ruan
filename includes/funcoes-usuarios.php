<?php
 require "conecta.php";

 //FunÇão para inserir novos usuários
 function inserirUsuario($conexao, $nome, $email, $senha, $tipo){
    // Montando o comando SQL para fazer o INSERT dos dados

    $sql = "INSERT INTO usuarios (nome, email, tipo, senha)
            VALUES('$nome', '$email','$tipo', '$senha')";

    // executando o comando no banco via php
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    

}
 
function listarUsuarios($conexao){ 
        $sql = "SELECT nome, email, tipo, id FROM usuarios";

        // Executando o comando no banco via PHP
        /* resultado (Bruto) da consulta/comando */
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));


        // Extraindo do resultado "Bruto" os da consulta em formato de ARRAY ASSOCIATIVO.
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function listarUmUsuario($conexao, $id){
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        return mysqli_fetch_assoc($resultado);
}