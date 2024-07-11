
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
        <h1>Conversor de Moedas v2.0</h1>
    </header>
    <main>
        <h1>Conversão</h1>
        <?php 
            $value = $_GET["value"];
            $url = "https://api.bcb.gov.br/dados/serie/bcdata.sgs.10813/dados/ultimos/1?formato=json";
            $dados = json_decode(file_get_contents($url));
            $quotacao = $dados[0]->valor;
            echo "<p>Seus R$" . number_format($value, 2, ",", ".") . " equivalem a <strong>US$". number_format(round($value/$quotacao, 2), 2, ",", ".") . "</strong></p>";
        ?>
        <p>*Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br">Banco Central do Brasil</a></p>
        <button onclick="javascript:window.location.href='index.php'">&#x2B05; Voltar</button>
    </main>
</body>
</html>