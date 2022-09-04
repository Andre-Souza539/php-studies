<!--
    1) - Crie um algoritmo que receba um número digitado pelo 
    usuário e verifique se esse valor é positivo, negativo ou 
    igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" 
    ou "Igual a Zero".
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 01</title>
</head>
<body>

    <form action="exercicio01.php" method="post">
        <input type="number" name="num1" id="">
        <input type="submit" value="Send">
    </form>

    <?php
        $num1 = $_POST["num1"];

        if($num1 > 0){
            echo "O número é positivo";
        } elseif ($num1 < 0){
            echo "O número é negativo";
        } elseif ($num1 == 0) {
            echo "O número é ZERO";
        } else {
            echo ("Não é um número válido");
        }
         

    ?>

</body>
</html>