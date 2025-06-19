<?php
$todosIds = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fonte_a'], $_POST['fonte_b'])) {

    $fonteA_raw = $_POST['fonte_a'];
    $idsFonteA_str = explode(',', $fonteA_raw);
    $idsFonteA = array_map('intval', array_filter(array_map('trim', $idsFonteA_str), 'is_numeric'));

    $fonteB_raw = $_POST['fonte_b'];
    $idsFonteB_str = explode(',', $fonteB_raw);
    $idsFonteB = array_map('intval', array_filter(array_map('trim', $idsFonteB_str), 'is_numeric'));
    
    $idsJuntos = array_merge($idsFonteA, $idsFonteB);
    $idsUnicos = array_unique($idsJuntos);
    sort($idsUnicos);
    $todosIds = $idsUnicos;

} else {
    header('Location: ../formularios/questao9.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 09: Consolidação de IDs de Usuários</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        h1, h2 { color: #000; }
        .result-box { background-color: #f0f0f0; padding: 1em; border-left: 5px solid #007bff; margin-top: 1em; }
        .result-text { font-size: 20px; font-weight: bold; letter-spacing: 2px; }
        a { display: block; margin-top: 2em; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Consolidador de IDs de Usuários</h1>
        
        <h2>Lista Final de IDs Únicos e Ordenados:</h2>
        
        <div class="result-box">
            <?php if (empty($todosIds)): ?>
                <p>Nenhum ID válido foi processado.</p>
            <?php else: ?>
                <p class="result-text"><?php echo implode(', ', $todosIds); ?></p>
            <?php endif; ?>
        </div>
        
        <a href="../formularios/questao9.html">&larr; Voltar e Consolidar Novas Listas</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>