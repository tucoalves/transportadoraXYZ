<?php

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Transportadora XYZ</title>
    </head>
    <body>
        <h1>Adicionar Aluno</h1>
        <small style="color: red;">*Campos obrigatórios</small>
        <form action="adicionar_controller.php" method="post">
            Status*:
            <input type="text" name="status" id="status"/>
            <br/>
            Remetente*:
            <input type="text" name="remetente" id="remetente"/>
            <br/>
            Destinatario*:
            <input type="text" name="destinatario" id="destinatario"/>
            <br/>
            Data de entrega prevista*:
            <input type="date" name="data_entrega_prevista" id="data_entrega_prevista"/>
            <br/>
            Data de entrega real*:
            <input type="date" name="data_entrega_real" id="data_entrega_real"/>
            <br/>
            Peso*:
            <input type="text" name="peso" id="peso"/>
            <br/>
            Largura*:
            <input type="text" name="largura" id="largura"/>
            <br/>
            Altura*:
            <input type="text" name="altura" id="altura"/>
            <br/>
            Comprimento*:
            <input type="text" name="comprimento" id="comprimento"/>
            <br/>
            <button type="button" onclick="location.href='pacotes.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>
