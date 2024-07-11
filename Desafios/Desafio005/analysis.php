<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Análise</title>
</head>
<body>
    <header>
        <h1>Analisador de número real</h1>
    </header>
    <main>
        <h1>Análise</h1>
        <?php 
            $value = $_GET["value"];
            echo "<p> Analisando o número " . number_format($value, 3, ",", ".") . " informado pelo usuário</p>";
            echo "<ul><li>A parte inteira do número é: <strong>". number_format((int)$value, 0, ",", ".")  ."</strong></li>";
            echo "<li>A parte fracionária do número é: <strong>". number_format($value - (int)$value, 3, ",", ".") ."</strong></li></ul>";
        ?>
        <button onclick="javascript:window.location.href='index.php'">&#x2B05; Voltar</button>
    </main>
</body>
</html>

