<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 09: Consolidação de IDs de Usuários</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        .form-group { margin-bottom: 1.5em; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        p.instructions { font-size: 14px; color: #6c757d; margin: 0 0 10px 0; }
        input[type="text"] { width: 95%; padding: 8px; font-size: 16px; }
        button { font-size: 16px; padding: 10px 15px; width: 100%; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Consolidador de IDs de Usuários</h1>
        <form action="../pratica3arrays/questao9.php" method="POST">
            <div class="form-group">
                <label for="fonte_a">IDs da Fonte A</label>
                <p class="instructions">Digite os IDs separados por vírgula (,).</p>
                <input type="text" id="fonte_a" name="fonte_a" required placeholder="101, 105, 102">
            </div>
            <div class="form-group">
                <label for="fonte_b">IDs da Fonte B</label>
                <p class="instructions">Digite os IDs separados por vírgula (,).</p>
                <input type="text" id="fonte_b" name="fonte_b" required placeholder="103, 101, 106">
            </div>
            <button type="submit">Consolidar IDs</button>
        </form>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>