<?php

include('../configBD.php');

if($_POST ['rua'] == ''){
    echo "Por favor, informe a rua!";
    
}
else if($_POST ['numero'] == ''){
    echo "Por favor, informe o numero!";
        
} 
else if($_POST ['bairro'] == ''){
    echo "Por favor, informe o bairro!";
        
}
else if($_POST ['cidade'] == ''){
    echo "Por favor, informe o cidade!";
        
}
else if($_POST ['estado'] == ''){
    echo "Por favor, informe o estado!";
        
}
 else {
     $rua = $_POST['rua'];
     $numero = $_POST['numero'];
     $bairro = $_POST['bairro'];
     $cidade = $_POST['cidade'];
     $estado = $_POST['estado'];
     $sql = "INSERT INTO endereco (rua, numero, bairro, cidade, estado) VALUES ('$rua','$numero','$bairro','$cidade','$estado');";
     if($mysqli->query($sql) == true) {
         echo "Endereco adicionado";
     }
     else{
         echo "Erro ao adicionar o endereco";
     }
}
$mysqli->close();
?>

<br/>
<button type="button" onclick="location.href='adicionarEndereco.php'">Voltar</button>