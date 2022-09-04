<!--
    2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
    Entrada = 4
    Saída = 4 X 0 = 0...4 X 10 = 40.


-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 02</title>
</head>
<body>
    <h3>Digite um número para calcular a tabuada</h3>
    <form action="exercicio02.php" method="post">
    
        <input type="number" name="num" id="">
        <input type="submit" value="Send">
    </form>
    <br>
    <?php
        $num1 = $_POST["num"];
        if($num1 != NULL){
            for($i = 1 ; $i<= 10 ; $i++){
                $resultado = $num1 * $i;
                echo "$num1 x $i = $resultado";
                echo "<br>";
            }
        } else {
            echo "Insira um valor válido";
        }
    ?>

</body>
</html>