<?php
session_start();

if (isset($_GET['acao']) && $_GET['acao'] == 'resetar') {
    unset($_SESSION['especiesObservadas']);
    header('Location: questao5.php');
    exit;
}

if (!isset($_SESSION['especiesObservadas'])) {
    $_SESSION['especiesObservadas'] = ['Beija-flor', 'Canário', 'Bem-te-vi', 'Sabiá', 'Beija-flor', 'Coruja'];
}

$mensagem_verificacao = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao'])) {
    
    if ($_POST['acao'] == 'adicionar' && !empty($_POST['nome_especie'])) {
        $nova_especie = htmlspecialchars(trim($_POST['nome_especie']));
        $_SESSION['especiesObservadas'][] = $nova_especie;
    }
    
    if ($_POST['acao'] == 'verificar' && !empty($_POST['especie_verificar'])) {
        $especie_a_verificar = htmlspecialchars(trim($_POST['especie_verificar']));
        
        if (in_array($especie_a_verificar, $_SESSION['especiesObservadas'])) {
            $mensagem_verificacao = "Boas notícias! A espécie '<strong>{$especie_a_verificar}</strong>' já foi registrada.";
            $classe_msg = "success";
        } else {
            $mensagem_verificacao = "Ainda não há registros para a espécie '<strong>{$especie_a_verificar}</strong>'.";
            $classe_msg = "info";
        }
    }

    if ($_POST['acao'] == 'adicionar') {
       header('Location: questao5.php');
       exit;
    }
}

$especiesUnicas = array_unique($_SESSION['especiesObservadas']);
sort($especiesUnicas);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 05: Monitoramento Ambiental</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; max-width: 800px; margin: 2em auto; background-color: #f8f9fa; color: #212529; }
        .container { background-color: white; padding: 2em; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.075); }
        h1, h2 { border-bottom: 1px solid #dee2e6; padding-bottom: 10px; }
        form { margin-bottom: 1.5em; display: flex; gap: 10px; }
        input[type="text"] { flex-grow: 1; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; }
        button { padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; color: white; background-color: #007bff; }
        button:hover { background-color: #0056b3; }
        .message { padding: 1em; margin-bottom: 1.5em; border-radius: 4px; }
        .message.success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .message.info { background-color: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
        .list-container { display: flex; gap: 2em; }
        .list-box { flex: 1; }
        ul { list-style-type: none; padding: 0; }
        li { background-color: #e9ecef; margin-bottom: 8px; padding: 8px 12px; border-radius: 4px; }
        .reset-link { display: block; text-align: center; margin-top: 25px; color: #6c757d; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Monitoramento Ambiental</h1>
        
        <h2>Verificar Registro de Espécie</h2>
        <form action="questao5.php" method="POST">
            <input type="hidden" name="acao" value="verificar">
            <input type="text" name="especie_verificar" required placeholder="Digite o nome da espécie. Ex: Pardal">
            <button type="submit">Verificar</button>
        </form>

        <?php if (!empty($mensagem_verificacao)): ?>
            <div class="message <?php echo $classe_msg; ?>">
                <?php echo $mensagem_verificacao; ?>
            </div>
        <?php endif; ?>

        <h2>Adicionar Nova Observação</h2>
        <form action="questao5.php" method="POST">
            <input type="hidden" name="acao" value="adicionar">
            <input type="text" name="nome_especie" required placeholder="Digite a espécie observada">
            <button type="submit">Adicionar Observação</button>
        </form>
        
        <div class="list-container">
            <div class="list-box">
                <h2>Todas as Observações</h2>
                <ul>
                    <?php foreach ($_SESSION['especiesObservadas'] as $especie): ?>
                        <li><?php echo htmlspecialchars($especie); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="list-box">
                <h2>Espécies Únicas</h2>
                <ul>
                    <?php foreach ($especiesUnicas as $especie): ?>
                        <li><?php echo htmlspecialchars($especie); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        
        <a class="reset-link" href="questao5.php?acao=resetar">Resetar Lista de Observações</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>