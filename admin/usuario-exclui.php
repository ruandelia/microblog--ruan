<?php
require "../includes/funcoes-controle-de-acesso.php";
verificarAcesso();
require "../includes/funcoes-usuarios.php";


$id= $_GET['id'];

excluirUsuario($conexao, $id);

header("location:usuarios.php");