<!-- sessões (SESSIONS) no php (Recurso especial) funcionalidade usada para o controle de acesso á determinadas páginas e/ou recursos do site.
 
exemplos: área administrativa, painel de controle, área de cliente/aluno etc.

nestas áreas o acesso se dá através de alguma forma de autentificação. exemplos: login/senha, biometria, autentificação em Duas Etapas e etc...

-->

<!-- Verificação de sessão  -->

<!-- verificando se NÃO EXISTE uma sessão em andamento -->

<?php

if( !isset($_SESSION)  ){
    session_start();
}


function verificarAcesso(){

    if( !isset($_SESSION['id'])  ){
       session_destroy();
       header("location:../login.php?acesso_negado");
       die();

    }

}

$nome = "";
if( isset($nome) ){
    echo "ta vazio";
}else{
    echo "ta definido";
}