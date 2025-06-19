<?php
$temperaturaMaxima = null;
$temperaturaMinima = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['temperaturas'])) {

    $temperaturas_raw = $_POST['temperaturas'];
    $temperaturas_str = explode(',', $temperaturas_raw);
    
    $temperaturasNumericas = array_filter(array_map('trim', $temperaturas_str), 'is_numeric');

    if (!empty($temperaturasNumericas)) {
        $temperaturaMaxima = max($temperaturasNumericas);
        $temperaturaMinima = min($temperaturasNumericas);
    }
} else {
    header('Location: ../formularios/questao11.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11: Monitoramento de Sensores</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        .result-box { margin-top: 1em; }
        .result-item { font-size: 20px; padding: 1em; margin-bottom: 1em; border-left-width: 5px; border-left-style: solid; }
        .max { border-color: #dc3545; background-color: #f8d7da; }
        .min { border-color: #007bff; background-color: #d1ecf1; }
        a { display: block; margin-top: 2em; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Monitoramento de Sensores</h1>
        
        <div class="result-box">
            <?php if ($temperaturaMaxima !== null && $temperaturaMinima !== null): ?>
                <div class="result-item max">
                    <strong>Temperatura Máxima:</strong> <?php echo htmlspecialchars($temperaturaMaxima); ?>°C
                </div>
                <div class="result-item min">
                    <strong>Temperatura Mínima:</strong> <?php echo htmlspecialchars($temperaturaMinima); ?>°C
                </div>
            <?php else: ?>
                <p>Nenhum dado de temperatura válido foi inserido para análise.</p>
            <?php endif; ?>
        </div>
        
        <a href="../formularios/questao11.php">&larr; Voltar e Inserir Novas Leituras</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>