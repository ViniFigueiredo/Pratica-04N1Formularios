<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 01: Adicionar Produto</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        .form-group { margin-bottom: 1em; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"] { width: 95%; padding: 8px; font-size: 16px; }
        button { font-size: 16px; padding: 10px 15px; width: 100%; margin-top: 1em; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Produtos</h1>
        <h2>Adicionar Novo Produto</h2>
        <form action="../pratica3arrays/questao1.php" method="POST">
            <div class="form-group">
                <label for="nome_produto">Nome do Produto:</label>
                <input type="text" id="nome_produto" name="nome_produto" required>
            </div>
            <div class="form-group">
                <label for="sku_produto">SKU do Produto:</label>
                <input type="text" id="sku_produto" name="sku_produto" required>
            </div>
            <button type="submit">Adicionar Produto à Lista</button>
        </form>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>