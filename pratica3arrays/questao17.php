<?php
$vetorDePalavras = [];
$quantidadePalavras = 0;
$textoOriginal = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(trim($_POST['texto_analise']))) {
    
    $textoOriginal = trim($_POST['texto_analise']);
    
    $vetorDePalavras = array_filter(explode(' ', $textoOriginal));
    
    $quantidadePalavras = count($vetorDePalavras);

} else {
    header('Location: ../formularios/questao17.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 17</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 800px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        .original-text { background-color: #f8f9fa; border-left: 3px solid #6c757d; padding: 0.1em 1em; margin-bottom: 2em; }
        .summary { font-size: 20px; font-weight: bold; background-color: #e9ecef; padding: 1em; margin-bottom: 2em; }
        ol { list-style-type: decimal; padding-left: 20px; }
        li { padding: 4px; border-bottom: 1px solid #eee; }
        a { display: block; margin-top: 2em; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Análise de Frases</h1>

        <div class="original-text">
            <h3>Texto Original</h3>
            <p><?php echo htmlspecialchars($textoOriginal); ?></p>
        </div>

        <div class="summary">
            Total de Palavras Encontradas: <?php echo $quantidadePalavras; ?>
        </div>
        
        <h2>Vetor de Palavras Resultante:</h2>
        
        <?php if (!empty($vetorDePalavras)): ?>
            <ol>
                <?php foreach ($vetorDePalavras as $palavra): ?>
                    <li><?php echo htmlspecialchars($palavra); ?></li>
                <?php endforeach; ?>
            </ol>
        <?php else: ?>
            <p>Nenhuma palavra encontrada no texto fornecido.</p>
        <?php endif; ?>
        
        <a href="../formularios/questao17.php">&larr; Voltar e Analisar Outro Texto</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>