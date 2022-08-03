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
        Ano de Nascimento: 
        <input type="number" name="ano" placeholder="4 digitos"><br>
        <input type="submit" value="Verificar">
    </form>
    <?php
        $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
        $idade = date('Y') - $ano;
        echo "Você nasceu em $ano e terá $idade anos";
        if($idade<16){
            $votar = "negado";
        }else if(($idade>=16 && $idade<18)||($idade>65)){
            $votar = "opcional";
        }else{
            $votar = "obrigatorio";
        }
        echo "<br>Com está idade $idade, seu voto é $votar";
    ?>
</body>
</html>