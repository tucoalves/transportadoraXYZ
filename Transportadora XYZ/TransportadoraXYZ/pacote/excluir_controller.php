<?php

    include ('../configBD.php');
    
    if (!isset($_GET['id']) && $_GET['id'] == ""){
        echo "Por favor, informe o ID do pacote";
    }
    else{
        $id = $_GET['id'];
        $sql = "DELETE FROM pacote WHERE id = $id;";
        if($mysqli->query($sql) == true) {
            echo "Pacote excluido";
     }
        else{
            echo "Erro ao excluir o pacote";
        }
    }
    
    $mysqli->close();

?>

<br/>
<button type="button" onclick="location.href='pacotes.php'">Voltar</button>
