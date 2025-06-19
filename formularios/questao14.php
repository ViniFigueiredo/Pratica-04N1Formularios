<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 14: Registros de Treino de Academia</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        .form-group { margin-bottom: 1.5em; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        p.instructions { font-size: 14px; color: #6c757d; margin: 0 0 10px 0; }
        input[type="text"] { width: 95%; padding: 8px; font-size: 16px; }
        button { font-size: 16px; padding: 10px 15px; width: 100%; }
        .nav-link { display: block; text-align: center; margin-top: 1.5em; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Adicionar Novo Registro de Treino</h1>
        <form action="../pratica3arrays/questao14.php" method="POST">
            <div class="form-group">
                <label for="nome_aluno">Nome do Aluno(a):</label>
                <input type="text" id="nome_aluno" name="nome_aluno" required>
            </div>
            <div class="form-group">
                <label for="resultados">Resultados do Treino:</label>
                <p class="instructions">Digite os resultados separados por vírgula (,).</p>
                <input type="text" id="resultados" name="resultados" required placeholder="45, 50, 55">
            </div>
            <button type="submit">Adicionar Registro</button>
        </form>
        <a class="nav-link" href="../pratica3arrays/questao14.php">Ver Lista Completa de Registros</a>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>