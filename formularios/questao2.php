<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 02: Lançar Notas do Boletim</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; max-width: 550px; margin: 2em auto; padding: 0 1em; line-height: 1.6; }
        h1, h2 { color: #333; }
        form { border: 1px solid #ddd; padding: 1.5em; border-radius: 8px; background-color: #f9f9f9; }
        .form-group { margin-bottom: 15px; }
        label { font-weight: bold; margin-bottom: 5px; display: block; }
        input[type="number"] { width: 95%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; }
        input[type="submit"] { width: 100%; background-color: #28a745; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        input[type="submit"]:hover { background-color: #218838; }
    </style>
</head>
<body>
    <h1>Boletim Escolar</h1>
    <h2>Lançamento de Notas</h2>

    <form action="../pratica3arrays/questao2.php" method="POST">
        <div class="form-group">
            <label for="nota_portugues">Português:</label>
            <input type="number" id="nota_portugues" name="nota_portugues" min="0" max="10" step="0.1" required placeholder="Ex: 8.5">
        </div>
        <div class="form-group">
            <label for="nota_matematica">Matemática:</label>
            <input type="number" id="nota_matematica" name="nota_matematica" min="0" max="10" step="0.1" required placeholder="Ex: 6.0">
        </div>
        <div class="form-group">
            <label for="nota_historia">História:</label>
            <input type="number" id="nota_historia" name="nota_historia" min="0" max="10" step="0.1" required placeholder="Ex: 7.2">
        </div>
        <div class="form-group">
            <label for="nota_geografia">Geografia:</label>
            <input type="number" id="nota_geografia" name="nota_geografia" min="0" max="10" step="0.1" required placeholder="Ex: 5.5">
        </div>
        <div>
            <input type="submit" value="Gerar Boletim">
        </div>
    </form>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>