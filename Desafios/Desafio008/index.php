<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Style/style.css">
    <title>Raizes</title>
</head>
<body>
    <?php 
        $valor = $_GET["value"] ?? 0;
    ?>
    <header>
        <h1>Raízes</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="value">Número</label>
            <input type="number" name="value" id="idvalue" value="<?=$valor?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <?php 
            if($_SERVER["PHP_SELF"] !== $_SERVER["REQUEST_URI"]){
                echo "<h2>Resultado Final</h2>";
                echo "<p>Analisando o <strong> número ". $valor .",</strong> temos:<p>";
                echo "<ul><li>A sua raiz quadrada é <strong>". number_format(sqrt($valor),2,",",".") ."</strong></li>";
                echo "<li>A sua raiz cúbica é <strong>". number_format(($valor**(1/3)),2,",",".") ."</strong></li></ul>";
            }else{
                echo "<h2>Cálculo de Raizes</h2>";
            }
        ?>
    </section>
</body>
</html>