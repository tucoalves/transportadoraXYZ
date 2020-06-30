<?php

include('../configBD.php');

if($_POST ['status'] == ''){
    echo "Por favor, informe o status!";
    
}
else if($_POST ['remetente'] == ''){
    echo "Por favor, informe o remetente!";
        
} 
else if($_POST ['destinatario'] == ''){
    echo "Por favor, informe o destinatario!";
        
}
else if($_POST ['data_entrega_prevista'] == ''){
    echo "Por favor, informe a data entrega prevista!";
        
}
else if($_POST ['data_entrega_real'] == ''){
    echo "Por favor, informe a data entrega real!";
        
}
else if($_POST ['peso'] == ''){
    echo "Por favor, informe o peso!";
        
}
else if($_POST ['largura'] == ''){
    echo "Por favor, informe a largura!";
        
}
else if($_POST ['altura'] == ''){
    echo "Por favor, informe a altura!";
        
}
else if($_POST ['comprimento'] == ''){
    echo "Por favor, informe o comprimento!";
        
}
 else {
     $status = $_POST['status'];
     $remetente = $_POST['remetente'];
     $destinatario = $_POST['destinatario'];
     $data_entrega_prevista = $_POST['data_entrega_prevista'];
     $data_entrega_real = $_POST['data_entrega_real'];
     $peso = $_POST['peso'];
     $largura = $_POST['largura'];
     $altura = $_POST['altura'];
     $comprimento = $_POST['comprimento'];
     $sql = "INSERT INTO pacote ( id_status,id_remetente ,id_destinatario ,data_entrega_prevista,data_entrega_real ,peso,largura,altura,comprimento) "
             . "VALUES ($status,$remetente,$destinatario,'$data_entrega_prevista','$data_entrega_real',$peso,$largura,$altura,$comprimento);";
     if($mysqli->query($sql) == true) {
         echo "Pacote adicionado";
     }
     else{
         echo "Erro ao adicionar o pacote";
     }
}
$mysqli->close();
?>

<br/>
<button type="button" onclick="location.href='adicionarPacote.php'">Voltar</button>