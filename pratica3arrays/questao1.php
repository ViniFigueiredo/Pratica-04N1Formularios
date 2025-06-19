<?php
session_start();

if (isset($_GET['acao']) && $_GET['acao'] == 'resetar') {
    unset($_SESSION['q1_produtos']);
    header('Location: questao1.php');
    exit;
}

if (!isset($_SESSION['q1_produtos'])) {
    $_SESSION['q1_produtos'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(trim($_POST['nome_produto']));
    $sku = htmlspecialchars(trim($_POST['sku_produto']));

    if (!empty($nome) && !empty($sku)) {
        $novo_produto = [
            "nome" => $nome,
            "sku" => $sku
        ];
        $_SESSION['q1_produtos'][] = $novo_produto;
    }
    header('Location: questao1.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 01: Adicionar Produto</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 700px; margin: 0 auto; }
        .list-container { border: 1px solid #ccc; padding: 1.5em; }
        ul { list-style: none; padding: 0; }
        li { padding: 8px; border-bottom: 1px solid #eee; }
        li:last-child { border-bottom: none; }
        a { display: inline-block; margin-bottom: 1.5em; }
        .reset-link { display: block; text-align: center; margin-top: 1.5em; color: #888; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Produtos</h1>
        <a href="../formularios/questao1.php">&larr; Adicionar Novo Produto</a>

        <div class="list-container">
            <?php if (empty($_SESSION['q1_produtos'])): ?>
                <p>Nenhum produto cadastrado ainda.</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($_SESSION['q1_produtos'] as $produto): ?>
                        <li>
                            <strong>Produto:</strong> <?php echo $produto["nome"]; ?> - <strong>SKU:</strong> <?php echo $produto["sku"]; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        
        <a class="reset-link" href="questao1.php?acao=resetar">Resetar Lista</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>