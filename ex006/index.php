<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulacao de Strings</title>
</head>
<body>

<h1>Manipulacao de Strings com PHP</h1>

<?php 

    echo "Existem quatro formatos de Strings: <br><br>";
    echo "1-) Double Quoted. <br>";
    echo "2-) Single Quoted. <br>";
    echo "3-) Heredoc. <br>";
    echo "4-) Nowdoc. <br><br>";

    echo "Nowdoc e Heredoc raramente são utilizadas. O Nowdoc faz
    exatamente a mesma coisa que o Single Quoted. <br><br>";

    echo "O operador de concatenacao é [.]. <br><br>";

    echo "Double Quoted: <br><br>";
    echo "Nas aspas duplas existe uma interpretacao do conteúdo. <br>";
    echo "Exemplo: PHP \u{1F418}<br><br>";

    echo "Single Quoted: <br><br>";
    echo "Nao existe interpretacao do conteúdo. <br>";
    echo 'Exemplo: PHP \u{1F418}<br><br>';

    echo "Sequências de Escape: <br><br>";
    echo '\n = nova linha.<br>';
    echo '\t = tabulacao horizontal.<br>';
    echo '\\ = barra invertida.<br>';
    echo '\$ = sinal de cifrão.<br>';
    echo '\u{} = codepoint unicode.<br><br>';

    echo "Para apresentar aspas duplas, como string deve-se utilizar contra-barra e aspas, isso
    é chamado de sequência de escape.<br>";
    echo 'Por exemplo: <br><br> echo "$nom \"Minotauro\" $nom"; <br><br>';

    $nom = "Rodrigo";
    $snom = "Nogueira";

    echo "$nom \"Minotauro\" $snom. <br><br>";

    echo "Vale ressaltar, que constantes não são interpoladas nem em
    single quoted, nem em double quoted. Para apresentar o valor
    de uma constante, é necessário que você utilize o operador de concatenacão. <br><br>";

    echo "Estamos no ano de " . date('Y');

?>
    
</body>
</html>