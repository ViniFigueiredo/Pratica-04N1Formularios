<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 18</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        .form-group { margin-bottom: 1.5em; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        p.instructions { font-size: 14px; color: #6c757d; margin: 0 0 10px 0; }
        input[type="text"], input[type="number"] { width: 95%; padding: 8px; font-size: 16px; }
        button { font-size: 16px; padding: 10px 15px; width: 100%; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Filtro de Dados de Sensor</h1>
        <form action="../pratica3arrays/questao18.php" method="POST">
            <div class="form-group">
                <label for="dados_sensor">Leituras do Sensor</label>
                <p class="instructions">Digite as leituras separadas por vírgula (,).</p>
                <input type="text" id="dados_sensor" name="dados_sensor" required placeholder="15.2, 28.9, 12.0, 35.5, 20.1">
            </div>
            <div class="form-group">
                <label for="limite">Filtrar leituras acima de:</label>
                <input type="number" id="limite" name="limite" required placeholder="25.0" step="any">
            </div>
            <button type="submit">Filtrar Dados</button>
        </form>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>