<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
            $number = $_GET["number"] === "" ? 0 : $_GET["number"];
            echo "<p>Número = <strong>$number</strong></p>";
            echo "<p>Antecessor = <strong>" . ($number - 1) . "</strong></p>";
            echo "<p>Sucessor = <strong>" . ($number + 1) . "</strong></p>";
        ?>
        <button onclick="javascript:window.location.href='index.php'">&#x2B05; Voltar</button>
    </main>
</body>
</html>