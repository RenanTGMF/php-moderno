<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulários retroalimentados</title>
</head>
<body>
    <?php 
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;
    ?>
    <header>
        <h1>Somador de Valores</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" required>
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>" required>
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <?php
        if($_SERVER['PHP_SELF'] !== $_SERVER["REQUEST_URI"]){
            echo "<h2>Resultado da Soma</h2>";
            echo "<p>A soma entre os valores $valor1 e $valor2 = " . ($valor1+$valor2) . "</p>";
        }
        else{
            echo "<h2>SOME DOIS VALORES</h2>";
        }
        ?>
    </section>
</body>
</html>