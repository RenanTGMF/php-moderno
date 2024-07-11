<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Style/style.css">
    <title>Conversor</title>
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <h1>Conversão</h1>
        <?php 
            $value = $_GET["value"];
            $quotacao = 5.22;

            echo "<p>Seus R$" . number_format($value, 2, ",", ".") . " equivalem a <strong>US$". number_format(round($value/$quotacao, 2), 2, ",", ".") . "</strong></p>"
        ?>
        <p><strong>*Cotação fixa de R$5,22</strong> informada diretamente no código.</p>
        <button onclick="javascript:window.location.href='index.php'">&#x2B05; Voltar</button>
    </main>
</body>
</html>