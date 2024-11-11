<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcões Aritméticas</title>
</head>
<body>

<h1>Funcões Aritméticas</h1>

<?php 

    $resultado = abs(-2000); // abs = absolute, ou seja, faz a remocão do sinal.
    $resultado1 = base_convert(254, 10, 8); // base_convert (valorQueSeraConvertido, baseAtual, baseQueSeraConvertida).
    // ceil() arrendonda pra cima, floor() arrendonda para baixo, round() arredonda aritmeticamente.
    $resultado3 = round(2);
    $resultado4 = 5%2; // mostra o resto da divisão.
    $resultado5 = 5/2; // mostra a divisão real.
    $resultado6 = intdiv(5, 2); // mostra o valor inteiro da divisão.

    echo "A divisão 5/2 tem como resultado real $resultado5, tem como resultado
    inteiro $resultado6 e como resto da divisão é $resultado4.<br><br>";

    $valorMin = min(70, 10);
    $valorMax = max(70, 10);

    echo "O valor mínimo entre 10 e 70 é: $valorMin.<br>";
    echo "O valor máximo entre 10 e 70 é: $valorMax.<br><br>";


    $pi = pi();
    echo "O valor de PI é $pi.<br><br>";

?>
    
</body>
</html>