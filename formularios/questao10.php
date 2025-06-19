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
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        p.instructions { font-size: 14px; color: #6c757d; margin: 0 0 10px 0; }
        textarea { width: 95%; height: 200px; padding: 8px; font-size: 16px; }
        button { font-size: 16px; padding: 10px 15px; width: 100%; margin-top: 1em;}
    </style>
</head>
<body>
    <div class="container">
        <h1>Registro de Presenças em Eventos</h1>
        <form action="../pratica3arrays/questao10.php" method="POST">
            <div class="form-group">
                <label for="lista_participantes">Lista de Presenças do Evento</label>
                <p class="instructions">Digite ou cole os nomes dos participantes (um por linha).</p>
                <textarea id="lista_participantes" name="lista_participantes" required placeholder="Carlos&#10;Ana&#10;João&#10;Maria&#10;João&#10;Pedro"></textarea>
            </div>
            <button type="submit">Gerar Lista de Únicos</button>
        </form>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>