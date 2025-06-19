<?php
$stringBase = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $caracteresPermitidos = [];
    $conjuntosSelecionados = isset($_POST['conjuntos']) ? $_POST['conjuntos'] : [];
    $caracteresAdicionais = isset($_POST['adicionais']) ? $_POST['adicionais'] : '';

    $conjuntos = [
        'minusculas' => range('a', 'z'),
        'maiusculas' => range('A', 'Z'),
        'numeros' => range('0', '9'),
        'simbolos' => ['!', '@', '#', '$', '%', '&', '*', '(', ')', '-', '_', '+', '=']
    ];

    foreach ($conjuntosSelecionados as $selecao) {
        if (isset($conjuntos[$selecao])) {
            $caracteresPermitidos = array_merge($caracteresPermitidos, $conjuntos[$selecao]);
        }
    }

    if (!empty($caracteresAdicionais)) {
        $caracteresPermitidos = array_merge($caracteresPermitidos, str_split($caracteresAdicionais));
    }

    $caracteresPermitidos = array_unique($caracteresPermitidos);
    
    $stringBase = implode('', $caracteresPermitidos);

} else {
    header('Location: ../formularios/questao16.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 16: Gerador de Senhas</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 800px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        h1, h2 { color: #000; }
        textarea { width: 98%; height: 150px; font-family: 'Courier New', monospace; font-size: 16px; padding: 1%; background-color: #f4f4f4; border: 1px solid #ddd; resize: vertical; }
        a { display: block; margin-top: 2em; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerador de String para Senhas</h1>

        <?php if (!empty($stringBase)): ?>
            <textarea readonly><?php echo htmlspecialchars($stringBase); ?></textarea>
        <?php else: ?>
            <p>Nenhum conjunto de caracteres foi selecionado. Por favor, volte e escolha ao menos uma opção.</p>
        <?php endif; ?>
        
        <a href="../formularios/questao16.php">&larr; Voltar e Gerar Nova String</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>