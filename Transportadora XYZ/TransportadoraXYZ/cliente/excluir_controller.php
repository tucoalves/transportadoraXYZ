<?php

    include ('../configBD.php');
    
    if (!isset($_GET['id']) && $_GET['id'] == ""){
        echo "Por favor, informe o ID do cliente";
    }
    else{
        $id = $_GET['id'];
        $sql = "DELETE FROM cliente WHERE id = $id;";
        if($mysqli->query($sql) == true) {
            echo "Cliente excluido";
     }
        else{
            echo "Erro ao excluir o cliente";
        }
    }
    
    
    $mysqli->close();

?>

<br/>
<button type="button" onclick="location.href='clientes.php'">Voltar</button>