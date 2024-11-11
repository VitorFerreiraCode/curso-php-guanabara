<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>

    <main>
        <?php         
            // Acessando o número da URL ou definindo uma mensagem padrão
            $numero = $_GET["numero"] ?? null;

            function antEsuc($numero) {
                if ($numero === null) {
                    echo "Você não informou um número.";
                    return;
                }
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "O seu número escolhido foi $numero. <br>";
                echo "O sucessor do número escolhido é $sucessor. <br>";
                echo "O antecessor do número escolhido é $antecessor. <br>";
            }

            // Chamando a função e passando o número
            antEsuc($numero);
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>
