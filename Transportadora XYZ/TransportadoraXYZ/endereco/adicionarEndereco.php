<?php

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Transportadora XYZ</title>
    </head>
    <body>
        <h1>Adicionar Endereco</h1>
        <small style="color: red;">*Campos obrigatórios</small>
        <form action="adicionar_controller.php" method="post">
            Rua*:
            <input type="text" name="rua" id="rua"/>
            <br/>
            Numero*:
            <input type="text" name="numero" id="numero"/>
            <br/>
            Bairro*:
            <input type="text" name="bairro" id="bairro"/>
            <br/>
            Cidade*:
            <input type="text" name="cidade" id="cidade"/>
            <br/>
            Estado*:
            <input type="text" name="estado" id="estado"/>
            <br/>
            <button type="button" onclick="location.href='enderecos.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>

