<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Variáveis</title>
</head>
<body>

<h1>Criando variáveis e apresentando-os</h1>

<?php 

    $nome = "Vitor"; // Criando uma variável. Símbolo de igual significa recebe.
    $sobrenome = "Ferreira";  // A variável sobrenome recebe a string "Ferreira".
    $idade = 21; // Números não necessitam estar envolvidos por parênteses.
    $peso = 108.5;
    $casado = "namorando";
    const PAIS = "Brasil"; // Constantes não podem ser alteradas.

    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS . "! Tem $idade anos, pesa $peso kg e você está $casado."; // Isso é chamado de interpolacao.
    
?>
    
</body>
</html>