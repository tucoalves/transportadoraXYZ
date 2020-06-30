<?php
//Conexão com o BD

// ip do servidor, nome do usuário, senha do usuário, nome da base
$mysqli = new mysqli("localhost" , "root" , "@150726Ar", "transportadora_xyz");

if(mysqli_connect_error()){
    echo "Erro ao conectar no BD: %s" . mysqli_connect_error();
    exit();
}

// Fim da Conexão com o BD


?>
