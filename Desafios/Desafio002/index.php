<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador</title>
</head>
<body>
    <header>
        <h1>Número Aleatório</h1>
    </header>
    <section>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $number = rand(0,100);
            echo "<p>O valor gerado foi: <strong>$number</strong></p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F3B2; Gerar outro número</button>
    </section>
</body>
</html>