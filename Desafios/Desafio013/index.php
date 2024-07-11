<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa</title>
</head>
<body>
    <?php
        $valor = $_GET["valor"] ?? 5;
    ?>

    <header>
        <h1>Caixa Eletrônico</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="idvalor" step="5" value="<?=$valor?>">
            <p style="font-size:0.7em">*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php 
            if($_SERVER["PHP_SELF"] !== $_SERVER["REQUEST_URI"]){
                echo "<h2>Saque de R$". number_format($valor,2,",",".") ." realizado</h2>";

                echo "<ul><li><img src=\"https://www.bcb.gov.br/content/cedulasemoedas/cedulas_e_moedas/indexcedulasemoedas/notacem.jpg\" alt=\"Nota de cem reais\"> x". intdiv($valor, 100)."</li>";
                $valor = $valor%100;
                echo "<li><img src=\"https://www.bcb.gov.br/content/cedulasemoedas/cedulas_e_moedas/indexcedulasemoedas/notacinquenta.jpg\" alt=\"Nota de cinquenta reais\"> x". intdiv($valor, 50)."</li>";
                $valor = $valor%50;
                echo "<li><img src=\"https://www.bcb.gov.br/content/cedulasemoedas/cedulas_e_moedas/indexcedulasemoedas/notadez.jpg\" alt=\"Nota de dez reais\"> x". intdiv($valor, 10)."</li>";
                $valor = $valor%10;
                echo "<li><img src=\"https://www.bcb.gov.br/content/cedulasemoedas/cedulas_e_moedas/indexcedulasemoedas/notacinco.jpg\" alt=\"Nota de cinco reais\"> x". intdiv($valor, 5)."</li></ul>";
            }else{

            }
        ?>
    </section>
</body>
</html>