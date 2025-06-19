<?php
$precosProdutos = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(trim($_POST['produtos_precos_input']))) {

    $input_raw = $_POST['produtos_precos_input'];
    $linhas = explode("\n", $input_raw);
    
    foreach ($linhas as $linha) {
        if (empty(trim($linha))) {
            continue;
        }
        
        $partes = explode(',', $linha, 2);
        
        if (count($partes) === 2) {
            $produto = trim($partes[0]);
            $preco_str = trim($partes[1]);
            
            if (is_numeric($preco_str)) {
                $precosProdutos[$produto] = (float)$preco_str;
            }
        }
    }
    
    if (!empty($precosProdutos)) {
        asort($precosProdutos);
    }

} else {
    header('Location: /pweb/formularios/questao7.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 07: Precificação Produtos</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; }
        .container { max-width: 600px; margin: 2em auto; background-color: white; padding: 2em; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 2em; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #dee2e6; }
        thead th { background-color: #007bff; color: white; }
        tbody tr:nth-child(even) { background-color: #f2f2f2; }
        td.price { text-align: right; font-weight: bold; color: #28a745; }
        .link-voltar { display: block; text-align: center; margin-top: 2em; font-size: 16px; color: #007BFF; text-decoration: none; }
        .link-voltar:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Precificação Produtos</h1>
        <h2>Produtos do Mais Barato para o Mais Caro</h2>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($precosProdutos)): ?>
                    <tr>
                        <td colspan="2">Nenhum produto válido foi inserido.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($precosProdutos as $produto => $preco): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($produto); ?></td>
                            <td class="price">R$ <?php echo number_format($preco, 2, ',', '.'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <a class="link-voltar" href="../formularios/questao7.php">&larr; Voltar e Inserir Nova Lista</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>