<?php
session_start();

if (isset($_GET['acao']) && $_GET['acao'] == 'resetar') {
    unset($_SESSION['livros']);
    header('Location: questao3.php');
    exit;
}

if (!isset($_SESSION['livros'])) {
    $_SESSION['livros'] = [
        "Dom Casmurro",
        "1984",
        "O Pequeno Príncipe",
        "A Revolução dos Bichos",
        "Capitães da Areia"
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao'])) {
    
    if ($_POST['acao'] == 'adicionar' && !empty($_POST['titulo_livro'])) {
        $novo_livro = htmlspecialchars(trim($_POST['titulo_livro']));
        $_SESSION['livros'][] = $novo_livro;
    }
    
    if ($_POST['acao'] == 'remover' && isset($_POST['livro_id'])) {
        $id_remover = (int)$_POST['livro_id'];
        
        if (isset($_SESSION['livros'][$id_remover])) {
            unset($_SESSION['livros'][$id_remover]);
            $_SESSION['livros'] = array_values($_SESSION['livros']);
        }
    }
    
    header('Location: questao3.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 03: Gestão de Estoque de Livros</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; max-width: 700px; margin: 2em auto; background-color: #f9f9f9; }
        .container { background-color: white; padding: 2em; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        h1, h2 { color: #333; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        ul { list-style-type: decimal; padding-left: 20px; }
        li { margin-bottom: 12px; display: flex; justify-content: space-between; align-items: center; padding: 8px; border-radius: 4px; transition: background-color 0.2s; }
        li:hover { background-color: #f1f1f1; }
        .add-form { margin-top: 20px; display: flex; gap: 10px; }
        .add-form input[type="text"] { flex-grow: 1; padding: 10px; border: 1px solid #ccc; border-radius: 4px; }
        button { padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; color: white; }
        .add-btn { background-color: #007BFF; }
        .add-btn:hover { background-color: #0056b3; }
        .remove-btn { background-color: #dc3545; font-size: 12px; }
        .remove-btn:hover { background-color: #c82333; }
        .reset-link { display: block; text-align: center; margin-top: 25px; color: #6c757d; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestão de Estoque de Livros</h1>
        
        <h2>Adicionar Novo Livro (Entrada)</h2>
        <form class="add-form" action="questao3.php" method="POST">
            <input type="hidden" name="acao" value="adicionar">
            <input type="text" name="titulo_livro" required placeholder="Digite o título do livro">
            <button class="add-btn" type="submit">Adicionar ao Estoque</button>
        </form>
        
        <h2>Estoque Atual</h2>
        <?php if (empty($_SESSION['livros'])): ?>
            <p>O estoque está vazio.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($_SESSION['livros'] as $id => $livro): ?>
                    <li>
                        <span><?php echo htmlspecialchars($livro); ?></span>
                        <form action="questao3.php" method="POST" style="display: inline;">
                            <input type="hidden" name="acao" value="remover">
                            <input type="hidden" name="livro_id" value="<?php echo $id; ?>">
                            <button class="remove-btn" type="submit">Vender (Remover)</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        
        <a class="reset-link" href="questao3.php?acao=resetar">Resetar Estoque Inicial</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>