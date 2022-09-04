<!--
    3) Crie um algoritmo que solicite um número, e faça o c
    álculo fatorial do mesmo, exiba o resultado na tela. 
    Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 03</title>
</head>
<body>
    <h3>Digite um número para calcular o fatorial</h3>
    <form action="exercicio03.php" method="post">
        <input type="number" name="num" id="">
        <input type="submit" value="Send">
    </form>
    <br>

    <?php
        $num = $_POST["num"];
        $i = $num;
        $result = 0;
        do{
            $i--;
            
            if($i > 0){
                echo "$num X $i = ". ($num * $i). "<br>";
                $num *= $i;
            }
        }while($i>0);
        echo "<br> O resultado é $num";

    ?>

</body>
</html>