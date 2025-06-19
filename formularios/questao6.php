<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 06: Categorias de Produtos</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; max-width: 600px; margin: 2em auto; background-color: #f8f9fa; }
        .container { background-color: white; padding: 2em; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        label { font-weight: bold; display: block; margin-bottom: 10px; }
        textarea { width: 95%; height: 150px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-family: inherit; font-size: 16px; }
        button { width: 100%; background-color: #007BFF; color: white; padding: 12px; border: none; border-radius: 4px; cursor: pointer; font-size: 18px; margin-top: 1em; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Categorias de Produtos</h1>
        <form action="../pratica3arrays/questao6.php" method="POST">
            <label for="categorias_input">Digite as categorias de produtos (uma por linha):</label>
            <textarea id="categorias_input" name="categorias_input" required placeholder="Eletrônicos&#10;Roupas&#10;Livros&#10;Beleza&#10;Esportes"></textarea>
            <button type="submit">Ordenar Categorias</button>
        </form>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>