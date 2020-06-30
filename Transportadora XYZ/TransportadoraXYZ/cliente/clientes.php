<?php

    include ('../configBD.php');
    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Transportadora XYZ</title>
    </head>
    <body>
        <h1>Clientes</h1>
        <button type="button" onclick="location.href='adicionarCliente.php'">Adicionar Cliente</button>
        <button type="button" onclick="location.href='../index.php'">Voltar</button>
        <br/>
        <br/>
        <table border="1px">
            <tr>
                <th>Endereco</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
            <?php
                $sql = "SELECT id, id_endereco, nome, email, telefone FROM cliente;";
                if($result = $mysqli->query($sql)){
                    while ($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row ['id_endereco'] . "</td>";
                        echo "<td>" . $row ['nome'] . "</td>";
                        echo "<td>" . $row ['email'] . "</td>";
                        echo "<td>" . $row ['telefone'] . "</td>";
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