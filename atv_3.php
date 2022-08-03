<!--
    Faça um sistema que permita a personalizar 
    um texto através de um formulário
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#0000";
    ?>
    <style>
        span.texto{
            font-size:<?php echo $tam;?>;
            color:<?php echo $cor;?>;
        }
    </style>
</head>
<body>
    <form method="get">
        <label for="itext">Texto:</label>
        <input type="text" name="t" id="itext"><br>
        <label for="itam">Tamanho:</label>
        <select name="tam" id="itam">
            <option value="8pt">8</option>
            <option value="10t">10</option>
            <option value="14pt">14</option>
            <option value="20pt">20</option>
            <option value="40pt">40</option>
        </select><br>
        <label for="icor">Cor:</label>
        <input type="color" name="cor" id="icor"><br>
        <input type="submit" value="Gerar">
    </form>
    <?php echo "<span class='texto'>$txt</span>";?>
</body>
</html>