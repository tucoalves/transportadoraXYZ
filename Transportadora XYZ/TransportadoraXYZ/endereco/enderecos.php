<?php

    include ('../configBD.php');
    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Transportadora XYZ</title>
    </head>
    <body>
        <h1>Enderecos</h1>
        <button type="button" onclick="location.href='adicionarEndereco.php'">Adicionar Endereco</button>
        <button type="button" onclick="location.href='../index.php'">Voltar</button>
        <br/><br/>
        <table border="1px">
            <tr>
                <th>Rua</th>
                <th>Numero</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
            <?php
                $sql = "SELECT id, rua, numero, bairro, cidade, estado FROM endereco;";
                if($result = $mysqli->query($sql)){
                    while ($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row ['rua'] . "</td>";
                        echo "<td>" . $row ['numero'] . "</td>";
                        echo "<td>" . $row ['bairro'] . "</td>";
                        echo "<td>" . $row ['cidade'] . "</td>";
                        echo "<td>" . $row ['estado'] . "</td>";
                        echo "<td>";
                        echo "<a href='excluir_controller.php?id=" . $row ['id'] ."'>Excluir</a>";
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