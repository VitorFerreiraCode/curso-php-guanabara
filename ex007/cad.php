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
            var_dump($_GET); // Variável super global do método get.
            // var_dump($_POST); // Variável super global do método post.
            // var_dump($_REQUEST) //Variável super global de request, serve para os métodos get e post.
            $nome = $_GET["nome"] ?? "Sem nome"; // ?? "Sem nome" isto é um operador de coalescência nula.
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            
            echo "<p>É um prazer te conhecer <strong>$nome $sobrenome</strong>.";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>


    
</body>
</html>