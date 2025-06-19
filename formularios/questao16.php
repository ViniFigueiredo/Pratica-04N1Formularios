<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 16: Gerador de Senhas</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 2em; }
        fieldset { border: 1px solid #ccc; padding: 1em; margin-bottom: 1em; }
        legend { font-weight: bold; }
        .form-group { margin-bottom: 0.5em; }
        label { margin-left: 5px; }
        input[type="text"] { width: 95%; padding: 8px; font-size: 16px; margin-top: 5px; }
        button { font-size: 16px; padding: 10px 15px; width: 100%; margin-top: 1em; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerador de String para Senhas</h1>
        <form action="../pratica3arrays/questao16.php" method="POST">
            <fieldset>
                <legend>Selecione os conjuntos de caracteres</legend>
                <div class="form-group">
                    <input type="checkbox" id="minusculas" name="conjuntos[]" value="minusculas" checked>
                    <label for="minusculas">Letras minúsculas (a-z)</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="maiusculas" name="conjuntos[]" value="maiusculas" checked>
                    <label for="maiusculas">Letras maiúsculas (A-Z)</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="numeros" name="conjuntos[]" value="numeros" checked>
                    <label for="numeros">Números (0-9)</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="simbolos" name="conjuntos[]" value="simbolos">
                    <label for="simbolos">Símbolos (!@#$%...)</label>
                </div>
            </fieldset>
            <div class="form-group">
                <label for="adicionais">Caracteres adicionais:</label>
                <input type="text" id="adicionais" name="adicionais" placeholder="Ex: _-./">
            </div>
            <button type="submit">Gerar String Base</button>
        </form>
    </div>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>