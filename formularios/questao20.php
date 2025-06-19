<?php
session_start();

if (isset($_GET['acao']) && $_GET['acao'] == 'resetar') {
    unset($_SESSION['inventario']);
    header('Location: questao20.php');
    exit;
}

if (!isset($_SESSION['inventario'])) {
    $_SESSION['inventario'] = [
        'notebook' => 20,
        'mouse' => 50,
        'teclado' => 30
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(trim($_POST['produto']))) {
    $produto = strtolower(trim(htmlspecialchars($_POST['produto'])));

    if (array_key_exists($produto, $_SESSION['inventario'])) {
        $_SESSION['inventario'][$produto] += 5;
    } else {
        $_SESSION['inventario'][$produto] = 15;
    }
    
    header('Location: questao20.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 20</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 700px; margin: 0 auto; }
        .form-container, .inventario-container { border: 1px solid #ccc; padding: 1.5em; margin-bottom: 2em; }
        .form-group { margin-bottom: 1em; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="number"] { width: 95%; padding: 8px; font-size: 16px; max-width: 300px; }
        button { font-size: 16px; padding: 10px 15px; }
        h1, h2 { color: #000; }
        table { width: 100%; border-collapse: collapse; margin-top: 1em; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        thead th { background-color: #f2f2f2; }
        .reset-link { display: block; text-align: center; margin-top: 2em; color: #888; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Inventário</h1>

        <div class="form-container">
            <h2>Adicionar ou Atualizar Produto</h2>
            <form action="questao20.php" method="POST">
                <div class="form-group">
                    <label for="produto">Nome do Produto:</label>
                    <input type="text" id="produto" name="produto" required>
                </div>
                
                <button type="submit">Registrar no Inventário</button>
            </form>
        </div>

        <div class="inventario-container">
            <h2>Inventário Atual</h2>
            <?php if (empty($_SESSION['inventario'])): ?>
                <p>O inventário está vazio.</p>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            ksort($_SESSION['inventario']);
                            foreach ($_SESSION['inventario'] as $produto => $quantidade): 
                        ?>
                            <tr>
                                <td><?php echo ucfirst($produto); ?></td>
                                <td><?php echo $quantidade; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
        
        <a class="reset-link" href="questao20.php?acao=resetar">Resetar Inventário</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">Retornar à página inicial</a>
        </div>
    </div>
</body>
</html>