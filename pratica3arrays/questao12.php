<?php
$precosAntigos = [];
$precosNovos = [];
$aumento_percentual = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['precos']) && isset($_POST['aumento'])) {

    $precos_raw = $_POST['precos'];
    $precos_str = explode(',', $precos_raw);
    $precosAntigos = array_filter(array_map('trim', $precos_str), 'is_numeric');

    $aumento_percentual = $_POST['aumento'];

    if (!empty($precosAntigos) && is_numeric($aumento_percentual)) {
        $fatorAumento = 1 + ((float)$aumento_percentual / 100);
        
        foreach ($precosAntigos as $preco) {
            $novoPreco = (float)$preco * $fatorAumento;
            $precosNovos[] = $novoPreco;
        }
    }
} else {
    header('Location: ../formularios/questao12.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 12: Aumento de Preços</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .main-container { max-width: 900px; margin: 0 auto; }
        h1, h2, h3 { color: #000; }
        h3 { text-align: center; background-color: #eee; padding: 0.5em; }
        .lists-container { display: flex; gap: 2em; }
        .list-box { flex: 1; border: 1px solid #ccc; padding: 1em; }
        ul { list-style: none; padding: 0; }
        li { padding: 5px 0; font-size: 18px; border-bottom: 1px solid #eee; }
        li:last-child { border-bottom: none; }
        a { display: block; margin-top: 2em; }
    </style>
</head>
<body>
    <div class="main-container">
        <h1>Aumento de Preços</h1>
        <h3>Aumento de <?php echo htmlspecialchars($aumento_percentual); ?>% Aplicado</h3>

        <div class="lists-container">
            <div class="list-box">
                <h2>Preços Antigos</h2>
                <ul>
                    <?php foreach ($precosAntigos as $preco): ?>
                        <li>R$ <?php echo number_format((float)$preco, 2, ',', '.'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="list-box">
                <h2>Preços Novos</h2>
                <ul>
                    <?php foreach ($precosNovos as $preco): ?>
                        <li>R$ <?php echo number_format($preco, 2, ',', '.'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        
        <a href="../formularios/questao12.php">&larr; Voltar e Calcular Novamente</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>