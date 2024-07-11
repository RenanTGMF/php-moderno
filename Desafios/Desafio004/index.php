<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moedas</title>
</head>
<body>
    <header>
        <h1>Conversor de Moedas v2.0</h1>
    </header>
    <section>
        <form action="convert.php" method="get">
            <label for="value">Quanto R$ você tem na carteira?</label>
            <input type="number" step="any" name="value" id="idvalue" required>
            <input type="submit" value="Converter">
        </form>
    </section>
</body>
</html>