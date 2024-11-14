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