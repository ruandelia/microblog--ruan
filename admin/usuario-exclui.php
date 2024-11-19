<?php
require "../includes/cabecalho-admin.php";
require "../includes/funcoes-usuarios.php";
require "../includes/rodape-admin.php";


$id= $_GET['id'];

excluirUsuario($conexao, $id);

header("location:usuarios.php");