<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 08: Jogo de Cartas Digital</title>
    <style>
        body { 
            font-family: sans-serif; 
            display: flex; 
            flex-direction: column;
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
            padding: 20px;
            box-sizing: border-box;
        }
        .table-container { 
            text-align: center; 
            padding: 2em 3em; 
            border: 1px solid #ccc; 
            border-radius: 5px;
            max-width: 500px;
            width: 100%;
        }
        h1 { 
            font-size: 1.8em;
            margin-bottom: 0.5em;
        }
        p { 
            margin-bottom: 1.5em; 
            line-height: 1.5;
        }
        .shuffle-btn { 
            padding: 10px 20px; 
            font-size: 1em; 
            border: 1px solid #000;
            border-radius: 5px; 
            cursor: pointer; 
            background-color: #fff;
            color: #000;
        }
        .shuffle-btn:hover { 
            background-color: #eee;
        }
        .home-link { 
            margin-top: 1.5em; 
            color: #000; 
            text-decoration: none; 
            font-size: 0.9em;
            padding: 8px 15px;
            border: 1px solid #000;
            border-radius: 5px;
        }
        .home-link:hover {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h1>Jogo de Cartas Digital</h1>
        <p>O baralho está pronto na mesa. Clique no botão abaixo para embaralhar as cartas de forma aleatória.</p>
        <form action="../pratica3arrays/questao8.php" method="POST">
            <button type="submit" class="shuffle-btn">Embaralhar Cartas</button>
        </form>
    </div>
    <a href="../index.php" class="home-link">retornar a página inicial</a>
</body>
</html>