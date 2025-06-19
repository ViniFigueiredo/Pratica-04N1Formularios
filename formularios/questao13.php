<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13: Média de Despesas</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        .form-group { margin-bottom: 1.5em; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        p.instructions { font-size: 14px; color: #6c757d; margin: 0 0 10px 0; }
        input[type="text"] { width: 95%; padding: 8px; font-size: 16px; }
        button { font-size: 16px; padding: 10px 15px; width: 100%; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Média de Despesas</h1>
        <form action="../pratica3arrays/questao13.php" method="POST">
            <div class="form-group">
                <label for="despesas">Valores das Despesas</label>
                <p class="instructions">Digite os valores separados por vírgula (,).</p>
                <input type="text" id="despesas" name="despesas" required placeholder="1200.50, 850.75, 1500.00">
            </div>
            <button type="submit">Calcular Média</button>
        </form>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>