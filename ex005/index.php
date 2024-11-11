<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos do PHP</title>
</head>
<body>

<h1>Tipos Primitivos do PHP</h1>

<?php 

    echo "Existem três categorias de tipos primitivos: <br><br>";
    echo "1-) Escalares <br>";
    echo "2-) Compostos <br>";
    echo "3-) Especiais <br><br>";

    echo "Escalares: <br><br>";
    echo "String: que é uma sequência de letras, números e símbolos, sempre 
    representadas entre aspas. <br>";
    echo "Int ou Integer: é um valor numerico inteiro, ou seja, aquele que vem
    sem a parte decimal. <br>";
    echo "Float ou double: são números que tem parte decimal. <br>";
    echo "Boolean ou Bool: são valores lógicos, ou seja, aceita apenas os
    valores 'true or false'.<br><br>";

    echo "Compostos: <br><br>";
    echo "Array. <br>";
    echo "Object. <br><br>";

    echo "Exemplo de Array: <br><br>";

    $vetMixed = [6, 2.5, "Manuela", 3, false]; // No PHP, dá para misturar em uma array diversos tipos de dados.
    var_dump($vetMixed);
    $vetInt = [1, 2, 3, 4, 5, 6]; // Para criar uma array basta $nomeDaVariavel = [valores, separador, por, vírgula].    var_dump($vetInt);

    echo "<br><br> Exemplo de Object: <br><br>";

    class Pessoa { // Para criar uma classe basta dizer class NomeDaClasse {Comando}
        private string $nome; // atributo da classe pessoa, ou seja, nesse caso, uma pessoa tem um nome e esse nome é uma string.
    }

    $p = new Pessoa;
    var_dump($p);


    echo "<br><br>Especiais: <br><br>";
    echo "Null. <br>";
    echo "Resource. <br>";
    echo "Callabe. <br>";
    echo "Mixed. <br><br>";

    echo "Exemplos: <br><br>";
    echo "1-) 'RJ' = String.<br>";
    echo "2-) 3.1415 = Float.<br>";
    echo "3-) 17 = Int.<br>";
    echo "4-) True = Boolean<br>";
    echo "5-) ' ' = String.<br>";
    echo "6-) -19 = Int.<br>";
    echo "7-) 'False' = String.";
    echo "0x1A = Int. <br>";
    echo "3e2 = 3x10ˆ2 = Double. <br><br>"; // 0x = hexadecimal, 0b = binário e 0 = octal.

    $valor = 300;
    var_dump($valor); // O comando var_dump serve para mostrar o tipo primitivo da variável.

?>
    
</body>
</html>