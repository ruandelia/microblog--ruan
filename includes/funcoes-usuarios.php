<?php
 require "conecta.php";

 function executarQuery($conexao, $sql){
        $consulta = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        return $consulta;
 }


 //FunÇão para inserir novos usuários
 function inserirUsuario($conexao, $nome, $email, $senha, $tipo){
    // Montando o comando SQL para fazer o INSERT dos dados

    $sql = "INSERT INTO usuarios (nome, email, tipo, senha)
            VALUES('$nome', '$email','$tipo', '$senha')";

    // executando o comando no banco via php
    executarQuery($conexao, $sql);
    

}
 

function listarUsuarios($conexao){ 
        $sql = "SELECT nome, email, tipo, id FROM usuarios";

        // Executando o comando no banco via PHP
        /* resultado (Bruto) da consulta/comando */
        $resultado = executarQuery($conexao, $sql);


        // Extraindo do resultado "Bruto" os da consulta em formato de ARRAY ASSOCIATIVO.
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function listarUmUsuario($conexao, $id){

        $sql = "SELECT * FROM usuarios WHERE id = $id";

        $resultado = executarQuery($conexao, $sql);

        return mysqli_fetch_assoc($resultado);
}

function atualizarUsuario($conexao, $id, $nome, $email, $senha, $tipo){

        $sql = "UPDATE usuarios SET
                nome = '$nome',
                email = '$email',
                senha = '$senha',
                tipo = '$tipo'
                WHERE id = $id";
 executarQuery($conexao, $sql);
}

function excluirUsuario($conexao, $id){
        $sql = "DELETE FROM usuarios WHERE id = $id";
        executarQuery($conexao, $sql);
}