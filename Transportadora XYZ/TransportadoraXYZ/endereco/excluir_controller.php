<?php

    include ('../configBD.php');
    
    if (!isset($_GET['id']) && $_GET['id'] == ""){
        echo "Por favor, informe o ID do endereco";
    }
    else{
        $id = $_GET['id'];
        $sql = "DELETE FROM endereco WHERE id = $id;";
        if($mysqli->query($sql) == true) {
            echo "Endereco excluido";
     }
        else{
            echo "Erro ao excluir o endereco";
        }
    }
    
    
    $mysqli->close();

?>

<br/>
<button type="button" onclick="location.href='enderecos.php'">Voltar</button>