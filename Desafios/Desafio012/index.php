<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Style/style.css">
    <title>Tempo</title>
</head>
<body>
    <?php 
        $tempo = $_GET["tempo"] ?? 0;
    ?>

    <header>
        <h1>Calculadora de Tempo</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="tempo">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="idtempo" value="<?=$tempo?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 
            if($_SERVER["PHP_SELF"] !== $_SERVER["REQUEST_URI"]){
                echo "<h2>Totalizando tudo</h2>";
                echo "<p>Analisando o valor que você digitou, <strong>". number_format($tempo,0,",",".")." segundos</strong> equivalem a um total de:</p>";
                echo "<ul><li>". intdiv($tempo, 604800) ." semanas</li>";
                echo "<li>". intdiv($tempo, 86400) % 7 ." dias</li>";
                echo "<li>". intdiv($tempo, 3600) % 24 ." horas</li>";
                echo "<li>". intdiv($tempo, 60) % 60 ." minutos</li>";
                echo "<li>". $tempo - (intdiv($tempo, 60) * 60) ." segundos</li></ul>";
            }else{
                echo "<h2>Calcula Tempo</h2>";
            }
        ?>
    </section>
</body>
</html>