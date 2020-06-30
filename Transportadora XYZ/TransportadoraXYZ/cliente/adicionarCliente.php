<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Transportadora XYZ</title>
    </head>
    <body>
        <h1>Adicionar Aluno</h1>
        <small style="color: red;">*Campos obrigatórios</small>
        <form action="adicionar_controller.php" method="post">
            Endereco*:
            <input type="text" name="endereco" id="id_endereco"/>
            <br/>
            Nome*:
            <input type="text" name="nome" id="nome"/>
            <br/>
            Email*:
            <input type="email" name="email" id="email"/>
            <br/>
            Telefone*:
            <input type="text" name="telefone" id="telefone"/>
            <br/>
            <button type="button" onclick="location.href='clientes.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>