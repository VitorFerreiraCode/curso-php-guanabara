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
            // Acessando os valores da URL ou definindo valores padrão
            $valor = $_GET["valor"] ?? 0;


            function conversao($valor) {

                $valorDolar = 0.635;
                // Multiplica o valor inserido pela cotacão.
                $valorConvertido = $valor * $valorDolar;
                // Exibe o número gerado
                echo "R\$$valor = U\$$valorConvertido. <br>";
            }

            // Chamando a função para exibir o número aleatório
            conversao($valor);
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>
