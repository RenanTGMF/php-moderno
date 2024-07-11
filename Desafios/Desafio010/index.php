<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Style/style.css">
    <title>Idade</title>
</head>
<body>
    <?php 
        $ano_nascimento = $_GET["ano_nasc"] ?? 2000;
        $ano_atual = date('Y');
        $ano_escolha = $_GET["ano_escolha"] ?? date('Y');
    ?>

    <header>
        <h1>Calculando sua Idade</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" id="idano_nasc" value="<?=$ano_nascimento?>">
            <label for="ano_nasc">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$ano_atual?></strong>)</label>
            <input type="number" name="ano_escolha" id="idano_escolha" value="<?=$ano_escolha?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 
            if($_SERVER["PHP_SELF"] !== $_SERVER["REQUEST_URI"]){
                echo "<h2>Resultado</h2>";
                echo "<p>Quem nasceu em $ano_nascimento vai ter ". $ano_escolha - $ano_nascimento ." anos em $ano_escolha!</p>";
            }else{
                echo "<h2>IDADE</h2>";
            }
        ?>
    </section>
</body>
</html>