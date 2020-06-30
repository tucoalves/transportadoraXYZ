<?php

include('../configBD.php');

if($_POST ['nome'] == ''){
    echo "Por favor, informe o nome!";
    
}
else if($_POST ['email'] == ''){
    echo "Por favor, informe o e-mail!";
        
} 
else if($_POST ['telefone'] == ''){
    echo "Por favor, informe o telefone!";
        
}
 else {
     $id_endereco = $_POST['endereco'];
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $telefone = $_POST['telefone'];
     $sql = "INSERT INTO cliente (id_endereco,nome, email, telefone) VALUES ($id_endereco,'$nome','$email','$telefone');";
     if($mysqli->query($sql) == true) {
         echo "Cliente adicionado";
     }
     else{
         echo "Erro ao adicionar o cliente";
     }
}
$mysqli->close();
?>

<br/>
<button type="button" onclick="location.href='clientes.php'">Voltar</button>