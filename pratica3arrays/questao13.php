<?php
$media = null;
$totalDespesas = 0;
$quantidadeMeses = 0;
$despesasNumericas = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['despesas'])) {

    $despesas_raw = $_POST['despesas'];
    $despesas_str = explode(',', $despesas_raw);
    
    $despesasNumericas = array_filter(array_map('trim', $despesas_str), 'is_numeric');

    if (!empty($despesasNumericas)) {
        $totalDespesas = array_sum($despesasNumericas);
        $quantidadeMeses = count($despesasNumericas);
        $media = $totalDespesas / $quantidadeMeses;
    }
} else {
    header('Location: ../formularios/questao13.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13: Média de Despesas</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        .summary, .result-box { margin-top: 1em; padding: 1em; }
        .summary { background-color: #f8f9fa; }
        .result-box { background-color: #d4edda; border-left: 5px solid #155724; }
        .result-text { font-size: 22px; font-weight: bold; color: #155724;}
        a { display: block; margin-top: 2em; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Média de Despesas</h1>
        
        <?php if ($media !== null): ?>
            <div class="summary">
                <p><strong>Total das Despesas:</strong> R$ <?php echo number_format($totalDespesas, 2, ',', '.'); ?></p>
                <p><strong>Quantidade de Registros:</strong> <?php echo $quantidadeMeses; ?></p>
            </div>
            <div class="result-box">
                <p>A média de despesas mensais é:</p>
                <p class="result-text">R$ <?php echo number_format($media, 2, ',', '.'); ?></p>
            </div>
        <?php else: ?>
            <p>Nenhum dado válido foi inserido para o cálculo.</p>
        <?php endif; ?>
        
        <a href="../formularios/questao13.php">&larr; Voltar e Calcular Novamente</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>