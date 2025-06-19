<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $baralhoOriginal = [
        "Ás de Espadas", "Rei de Espadas", "Dama de Espadas", "Valete de Espadas", "10 de Espadas",
        "Ás de Copas", "Rei de Copas", "Dama de Copas", "Valete de Copas", "10 de Copas",
        "Ás de Ouros", "Rei de Ouros", "Dama de Ouros", "Valete de Ouros", "10 de Ouros",
        "Ás de Paus", "Rei de Paus", "Dama de Paus", "Valete de Paus", "10 de Paus"
    ];

    $baralhoEmbaralhado = $baralhoOriginal;
    shuffle($baralhoEmbaralhado);
    
} else {
    header('Location: ../formularios/questao8.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 08: Jogo de Cartas Digital</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 2em;
        }
        .main-container {
            max-width: 900px;
            margin: 0 auto;
        }
        h1, h2 {
            color: #000;
        }
        .decks-container {
            display: flex;
            gap: 2em;
        }
        .deck-box {
            flex: 1;
            border: 1px solid #ccc;
            padding: 1em;
        }
        ol {
            padding-left: 20px;
        }
        li {
            padding: 2px 0;
        }
        a {
            display: block;
            margin-top: 2em;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <h1>Jogo de Cartas Digital</h1>
        <div class="decks-container">
            <div class="deck-box">
                <h2>Baralho Original</h2>
                <ol>
                    <?php foreach ($baralhoOriginal as $carta): ?>
                        <li><?php echo htmlspecialchars($carta); ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>
            <div class="deck-box">
                <h2>Baralho Embaralhado</h2>
                <ol>
                    <?php foreach ($baralhoEmbaralhado as $carta): ?>
                        <li><?php echo htmlspecialchars($carta); ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
        <a href="../formularios/questao8.php">&larr; Embaralhar Novamente</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>