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
            $numeroMin = $_GET["valorMinimo"] ?? 0;
            $numeroMax = $_GET["valorMaximo"] ?? 100;

            function gerarNumero($numeroMin, $numeroMax) {
                // Gera o número aleatório entre os limites definidos
                $numeroAleatorio = rand($numeroMin, $numeroMax);
                
                // Exibe o número gerado
                echo "O número aleatório entre $numeroMin e $numeroMax é: $numeroAleatorio. <br>";
            }

            // Chamando a função para exibir o número aleatório
            gerarNumero($numeroMin, $numeroMax);
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>
