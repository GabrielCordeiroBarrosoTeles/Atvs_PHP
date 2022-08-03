<!--
    Faça um sistema que leia o nome, ano de nascimento e sexo de uma pessoa e imprima as informações
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Nome: <input type="text" name="nome"><br>
        Ano de Nascimento: <input type="text" name="ano"><br>
        <fieldset>
            <legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem">
            <label for="masc">Masculino</label><br>
            <input type="radio" name="sexo" id="fem" value="mulher">
            <label for="fem">Feminino</label>
        </fieldset><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"Nome Generico";
        $ano = isset($_GET["ano"])?$_GET["ano"]:"2005";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"homem";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos";

    ?>
</body>
</html>