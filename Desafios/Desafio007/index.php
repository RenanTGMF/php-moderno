<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Style/style.css">
    <title>Salário</title>
</head>
<body>
    <?php 
        $salario_min =  1640;
        $salario = $_GET["salario"] ?? 0
    ?>
    <header>
        <h1>Salário Mínimo</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" step="any" name="salario" id="idsalario" value="<?=$salario?>">
            <p>*Considerando o salário mínimo de <strong>R$<?=number_format($salario_min,2,",",".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <?php 
            if($_SERVER['PHP_SELF'] !== $_SERVER["REQUEST_URI"]){
                echo "<h2>Resultado Final</h2>";
                echo "<p>Quem recebe um salário de R$". number_format($salario,2,",",".")." ganha <strong>". intdiv($salario, $salario_min) ." salários mínimos</strong> + R$". number_format(($salario - (intdiv($salario, $salario_min) * $salario_min)),2,",",".") .". </p>";
            }
            else{
                echo "<h2>Salários</h2>";
            }
        ?>
    </section>
</body>
</html>