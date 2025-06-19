<?php
$listaParticipantes = ['Carlos', 'Ana', 'João', 'Maria', 'João', 'Pedro', 'Maria', 'Ana'];
$participantesUnicos = array_unique($listaParticipantes);
?><?php
$participantesUnicos = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(trim($_POST['lista_participantes']))) {

    $participantes_raw = $_POST['lista_participantes'];
    
    $listaParticipantes = explode("\n", $participantes_raw);
    
    $listaLimpa = array_filter(array_map('trim', $listaParticipantes));

    $participantesUnicos = array_unique($listaLimpa);
    
    sort($participantesUnicos);

} else {
    header('Location: ../formularios/questao10.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10: Registro de Presenças em
Eventos</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        h1, h2 { color: #000; }
        ul { list-style-type: square; padding-left: 20px; }
        li { padding: 5px 0; font-size: 18px; }
        .empty-message { color: #888; font-style: italic; }
        a { display: block; margin-top: 2em; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registro de Presenças em Eventos</h1>
        <h2>Participantes Únicos (em ordem alfabética):</h2>
        
        <?php if (empty($participantesUnicos)): ?>
            <p class="empty-message">Nenhum participante válido foi inserido.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($participantesUnicos as $participante): ?>
                    <li><?php echo htmlspecialchars($participante); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        
        <a href="../formularios/questao10.php">&larr; Voltar e Gerar Nova Lista</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>