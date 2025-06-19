<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 04: Sorteio e Números Primos</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; background-color: #f0f7ff; margin: 0; }
        .container { text-align: center; background-color: white; padding: 3em 4em; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        p { color: #666; max-width: 400px; margin-bottom: 2em; }
        .sorteio-btn { background: linear-gradient(45deg, #28a745, #218838); color: white; border: none; padding: 15px 30px; font-size: 18px; font-weight: bold; border-radius: 50px; cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sorteio e Números Primos</h1>
        <p>Clique no botão abaixo para gerar 10 números aleatórios entre 1 e 60 e descobrir quantos deles são números primos.</p>
        <form action="../pratica3arrays/questao4.php" method="POST">
            <button type="submit" class="sorteio-btn">Realizar Sorteio Agora</button>
        </form>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>