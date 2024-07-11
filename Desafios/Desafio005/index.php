<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador</title>
</head>
<body>
    <header>
        <h1>Analisador de número real</h1>
    </header>
    <section>
        <form action="analysis.php" method="get">
            <label for="value">Número Real</label>
            <input type="number" step="0.001" name="value" id="idvalue" required>
            <input type="submit" value="Analisar">
        </form>
    </section>
</body>
</html>