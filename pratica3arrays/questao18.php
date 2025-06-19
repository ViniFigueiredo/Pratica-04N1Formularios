<?php
$leiturasFiltradas = [];
$limite = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dados_sensor'], $_POST['limite'])) {

    $limite_raw = trim($_POST['limite']);
    $dados_raw = trim($_POST['dados_sensor']);

    if (is_numeric($limite_raw) && !empty($dados_raw)) {
        $limite = (float)$limite_raw;

        $dados_str = explode(',', $dados_raw);
        $dadosSensor = array_map('floatval', array_filter(array_map('trim', $dados_str), 'is_numeric'));

        if (!empty($dadosSensor)) {
            $leiturasFiltradas = array_filter($dadosSensor, function($leitura) use ($limite) {
                return $leitura > $limite;
            });
        }
    }
} else {
    header('Location: ../formularios/questao18.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 18</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        h1, h2 { color: #000; }
        .result-box { background-color: #e9ecef; padding: 1em; border-left: 5px solid #007bff; margin-top: 1em; }
        .result-text { font-size: 20px; font-weight: bold; letter-spacing: 2px; }
        .empty-message { color: #888; font-style: italic; }
        a { display: block; margin-top: 2em; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Filtro de Dados de Sensor</h1>

        <?php if ($limite !== null): ?>
            <h2>Leituras filtradas (acima de <?php echo htmlspecialchars($limite); ?>):</h2>
            <div class="result-box">
                <?php if (empty($leiturasFiltradas)): ?>
                    <p class="empty-message">Nenhuma leitura atendeu ao critério do filtro.</p>
                <?php else: ?>
                    <p class="result-text"><?php echo implode(', ', $leiturasFiltradas); ?></p>
                <?php endif; ?>
            </div>
        <?php else: ?>
             <p class="empty-message">Dados inválidos. Por favor, preencha o formulário corretamente.</p>
        <?php endif; ?>
        
        <a href="../formularios/questao18.php">&larr; Voltar e Filtrar Novos Dados</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>