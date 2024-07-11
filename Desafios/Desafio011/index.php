<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajuste</title>
</head>
<body>
    <?php 
        $preco = $_GET["preco"] ?? 0;
        $porcentagem = $_GET["porcentagem"] ?? 0;
    ?>

    <header>
        <h1>Reajustador de Preços</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" step="any" name="preco" id="idpreco" value="<?=$preco?>">
            <label for="porcentagem">Qual será o percentual de reajuste? <strong>(<span id="display">0</span>%)</strong></label>
            <input type="range" min="0" max="100" name="porcentagem" id="porcentagem" value="<?=$porcentagem?>" onpointermove="updateDisplay(value)" oninput="display.value=this.value">



            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <?php 
            if($_SERVER["PHP_SELF"] !== $_SERVER["REQUEST_URI"]){
                echo "<h2>Resultado do Reajuste</h2>";
                echo "<p>O produto que custava R$".number_format($preco, 2, ",",".").", com <strong>$porcentagem% de aumento</strong> vai passar a custar <strong>R$" . number_format(($preco + ($preco * ($porcentagem/100))), 2, ",","."). "</strong> a partir de agora</p>";
            }else{
                echo "<h2>Reajustador</h2>";
            }
        ?>
    </section>

    <script>
        function updateDisplay(value) {
            document.getElementById('display').textContent = value;
        }
    </script>
</body>
</html>