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
        Número: <input type="number" name="num"><br>
        <fieldset>
            <legend>Operação</legend>
            <input type="radio" name="oper" id="dobro">
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" id="cubo">
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" id="raiz">
            <label for="raiz">Raiz</label>
        </fieldset>
        <input type="submit" valur="Calcular">
    </form>
    <?php
       $n = isset($_GET["num"])?$_GET["num"]:1;
       $o = isset($_GET["oper"])?$_GET["oper"]:1;
       switch($o){
        case 1:
            $r = $n*2;
        break;
        case 2:
            $r = $n^3;
        break;
        case 3:
            $r = sqrt($n);

       }
       echo "O resultado da operação solicitada foi $r";
    ?>
</body>
</html>