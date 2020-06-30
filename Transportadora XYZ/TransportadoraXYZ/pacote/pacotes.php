<?php

    include ('../configBD.php');
    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Transportadora XYZ</title>
    </head>
    <body>
        <h1>Pacotes</h1>
        <button type="button" onclick="location.href='adicionarPacote.php'">Adicionar Pacote</button>
        <button type="button" onclick="location.href='../index.php'">Voltar</button>
        <br/><br/>
        <table border="1px">
            <tr>
                <th>Status</th>
                <th>Remetente</th>
                <th>Destinatario</th>
                <th>Data entrega prevista</th>
                <th>Data entrega real</th>
                <th>Peso(KG)</th>
                <th>Largura(m)</th>
                <th>Altura(m)</th>
                <th>Comprimento(m)</th>
                
            </tr>
            <?php
                $sql = "SELECT id, id_status, id_remetente, id_destinatario, data_entrega_real, data_entrega_prevista, peso, largura, altura, comprimento FROM pacote;";
                if($result = $mysqli->query($sql)){
                    while ($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row ['id_status'] . "</td>";
                        echo "<td>" . $row ['id_remetente'] . "</td>";
                        echo "<td>" . $row ['id_destinatario'] . "</td>";
                        echo "<td>" . $row ['data_entrega_real'] . "</td>";
                        echo "<td>" . $row ['data_entrega_prevista'] . "</td>";
                        echo "<td>" . $row ['peso'] . "</td>";
                        echo "<td>" . $row ['largura'] . "</td>";
                        echo "<td>" . $row ['altura'] . "</td>";
                        echo "<td>" . $row ['comprimento'] . "</td>";
                        echo "<td>";
                        echo "<a href='excluir_controller.php?id=" . $row ['id'] ."'>Excluir</a>";;
                        echo "</tr>";
                    }
                    $result->close();
                }
            ?>
        </table>
    </body>
</html>

<?php
    $mysqli->close();
?>