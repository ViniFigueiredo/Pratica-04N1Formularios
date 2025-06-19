<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(trim($_POST['categorias_input']))) {

    $categorias_raw = $_POST['categorias_input'];
    
    $categorias = explode("\n", $categorias_raw);
    
    $categorias = array_filter(array_map('trim', $categorias));

    $categoriasOrdemCrescente = $categorias;
    sort($categoriasOrdemCrescente); 

    $categoriasOrdemDecrescente = $categorias;
    rsort($categoriasOrdemDecrescente);

} else {
    header('Location: /pweb/formularios/questao6.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 06: Categorias de Produtos</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; }
        .container { max-width: 800px; margin: 2em auto; background-color: white; padding: 2em; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #333; }
        .list-container { display: flex; justify-content: space-around; gap: 2em; margin-top: 2em; }
        .list-box { flex: 1; padding: 1.5em; background-color: #fdfdff; border: 1px solid #eef; border-radius: 5px; }
        h2 { color: #007BFF; border-bottom: 2px solid #007BFF; padding-bottom: 5px; }
        ul { list-style: none; padding: 0; }
        li { font-size: 18px; padding: 8px 0; border-bottom: 1px solid #eee; }
        li:last-child { border-bottom: none; }
        .link-voltar { display: block; text-align: center; margin-top: 2em; font-size: 16px; color: #007BFF; text-decoration: none; }
        .link-voltar:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Categorias de Produtos</h1>
        <div class="list-container">
            <div class="list-box">
                <h2>Ordem Alfabética (A-Z)</h2>
                <ul>
                    <?php foreach ($categoriasOrdemCrescente as $categoria): ?>
                        <li><?php echo htmlspecialchars($categoria); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="list-box">
                <h2>Ordem Decrescente (Z-A)</h2>
                <ul>
                    <?php foreach ($categoriasOrdemDecrescente as $categoria): ?>
                        <li><?php echo htmlspecialchars($categoria); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <a class="link-voltar" href="../formularios/questao6.php">&larr; Voltar e Ordenar Outra Lista</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>