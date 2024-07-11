<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Style/style.css">
    <title>Divisão</title>
</head>
<body>
    <?php 
        $dividendo = $_GET["dividendo"] ?? 0;   
        $divisor = $_GET["divisor"] ?? 1;   
    ?>
    <header>
        <h1>Anatomia de uma divisão</h1>
    </header>
    <main>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="iddividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <table class="divisao">
            <tr>
                <td><?= $dividendo?></td>
                <td><?= $divisor?></td>
            </tr>
            <tr>
                <td><?= $dividendo % $divisor;?></td>
                <td><?= intdiv($dividendo, $divisor)?></td>
            </tr>
        </table>
    </section>
</body>
</html>