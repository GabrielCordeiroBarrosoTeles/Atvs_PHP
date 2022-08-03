<!--
    Faça um sistema que receba um valor e imprima a raiz quadrada dela
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
        <input type="number" name="valor">
        <br><br><input type="submit" value="Calcular Raiz">
    </form>
    
        <?php
            $valor = isset($_GET["valor"])?$_GET["valor"]:"4";
            $rq = sqrt($valor);
            echo "A raiz do valor $valor, é igual a ".number_format($rq,2);  
        ?> 
</body>
</html>