<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 17</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        textarea { width: 95%; height: 150px; padding: 8px; font-size: 16px; }
        button { font-size: 16px; padding: 10px 15px; width: 100%; margin-top: 1em; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Análise de Frases</h1>
        <form action="../pratica3arrays/questao17.php" method="POST">
            <div class="form-group">
                <label for="texto_analise">Digite o texto para análise:</label>
                <textarea id="texto_analise" name="texto_analise" required placeholder="A programação PHP é fundamental para o desenvolvimento web"></textarea>
            </div>
            <button type="submit">Analisar Texto</button>
        </form>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>