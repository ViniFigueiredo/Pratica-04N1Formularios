<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 07: Precificação Produtos</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; max-width: 600px; margin: 2em auto; background-color: #f8f9fa; }
        .container { background-color: white; padding: 2em; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        label { font-weight: bold; display: block; margin-bottom: 10px; color: #555; }
        p.instructions { font-size: 14px; color: #6c757d; margin-top: -10px; margin-bottom: 15px; }
        textarea { width: 95%; height: 180px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-family: 'Courier New', Courier, monospace; font-size: 16px; }
        button { width: 100%; background-color: #28a745; color: white; padding: 12px; border: none; border-radius: 4px; cursor: pointer; font-size: 18px; margin-top: 1em; }
        button:hover { background-color: #218838; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Precificação Produtos</h1>
        <form action="../pratica3arrays/questao7.php" method="POST">
            <label for="produtos_input">Insira os produtos e preços:</label>
            <p class="instructions">Use o formato: <strong>Produto, Preço</strong> (um por linha).</p>
            <textarea id="produtos_input" name="produtos_precos_input" required placeholder="Arroz, 25.90&#10;Feijão, 8.50&#10;Macarrão, 4.20&#10;Óleo, 6.30&#10;Café, 14.75"></textarea>
            <button type="submit">Ordenar por Preço</button>
        </form>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>