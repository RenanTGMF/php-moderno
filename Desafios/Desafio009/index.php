<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias</title>
</head>
<body>
    <?php 
        $valor1 = $_GET["valor1"] ?? 0;
        $valor2 = $_GET["valor2"] ?? 0;
        $peso1 = $_GET["peso1"] ?? 1;
        $peso2 = $_GET["peso2"] ?? 1;
    ?>

    <header>
        <h1>Médias Aritméticas</h1>
    </header>

    <main>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="idvalor1" value="<?=$valor1?>">
            <label for="peso1">Peso 1</label>
            <input type="number" name="peso1" id="idpeso1" value="<?=$peso1?>">
            <label for="valor2">Valor</label>
            <input type="number" name="valor2" id="idvalor2" value="<?=$valor2?>">
            <label for="peso2">Peso 2</label>
            <input type="number" name="peso2" id="idpeso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 
            if($_SERVER["PHP_SELF"] !== $_SERVER["REQUEST_URI"]){
                echo "<h2>Cálculo das Médias</h2>";
                echo "<p>Analisando os valores $valor1 e $valor2:</p>";
                echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format((($valor1 + $valor2)/2),2,",",".") . "</li>";
                echo "<li>A <strong>Média Aritmética Ponderada</strong> entre os valores é igual a ". number_format(((($valor1*$peso1) + ($valor2*$peso2))/($peso1 + $peso2)),2,",",".") . "</li></ul>";
            }else{
                echo "<h2>Média</h2>";
            }
        ?>
    </section>
</body>
</html>