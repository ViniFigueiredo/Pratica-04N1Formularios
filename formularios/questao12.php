<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 12: Aumento de Preços</title>
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
        <h1>Aumento de Preços</h1>
        <form action="../pratica3arrays/questao12.php" method="POST">
            <div class="form-group">
                <label for="precos">Lista de Preços</label>
                <p class="instructions">Digite os preços separados por vírgula (,).</p>
                <input type="text" id="precos" name="precos" required placeholder="15.50, 22.00, 30.75, 8.99">
            </div>
            <div class="form-group">
                <label for="aumento">Percentual de Aumento (%)</label>
                <p class="instructions">Digite apenas o número.</p>
                <input type="number" id="aumento" name="aumento" required placeholder="10" min="0" step="any">
            </div>
            <button type="submit">Calcular Novos Preços</button>
        </form>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>