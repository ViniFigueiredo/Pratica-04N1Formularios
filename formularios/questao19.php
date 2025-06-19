<?php
session_start();

if (isset($_GET['acao'])) {
    if ($_GET['acao'] == 'resetar') {
        unset($_SESSION['filaAtendimento']);
    }
    if ($_GET['acao'] == 'atender' && !empty($_SESSION['filaAtendimento'])) {
        array_shift($_SESSION['filaAtendimento']);
    }
    header('Location: questao19.php');
    exit;
}

if (!isset($_SESSION['filaAtendimento'])) {
    $_SESSION['filaAtendimento'] = ['João Silva', 'Maria Santos', 'Pedro Costa'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(trim($_POST['nome_paciente']))) {
    $nomePaciente = htmlspecialchars(trim($_POST['nome_paciente']));
    $tipoEntrada = isset($_POST['tipo_entrada']) ? $_POST['tipo_entrada'] : 'regular';

    if ($tipoEntrada === 'prioritario') {
        array_unshift($_SESSION['filaAtendimento'], $nomePaciente);
    } else {
        $_SESSION['filaAtendimento'][] = $nomePaciente;
    }
    
    header('Location: questao19.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 19</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 700px; margin: 0 auto; }
        .form-container, .fila-container { border: 1px solid #ccc; padding: 1.5em; margin-bottom: 2em; }
        .form-group { margin-bottom: 1em; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"] { width: 95%; padding: 8px; font-size: 16px; max-width: 400px; }
        fieldset { border: none; padding: 0; }
        fieldset label { display: inline-block; margin-right: 15px; font-weight: normal; }
        button { font-size: 16px; padding: 10px 15px; }
        h1, h2 { color: #000; }
        ol { list-style-type: decimal; padding-left: 20px; }
        li { padding: 8px; font-size: 18px; border-bottom: 1px solid #eee; }
        li:first-child { font-weight: bold; color: #007bff; }
        .actions { margin-bottom: 1em; display: flex; gap: 1em; }
        a.button { text-decoration: none; background-color: #28a745; color: white; padding: 10px 15px; font-size: 16px; }
        .reset-link { display: block; text-align: center; margin-top: 2em; color: #888; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fila de Atendimento Médico</h1>

        <div class="form-container">
            <h2>Adicionar Paciente à Fila</h2>
            <form action="questao19.php" method="POST">
                <div class="form-group">
                    <label for="nome_paciente">Nome do Paciente:</label>
                    <input type="text" id="nome_paciente" name="nome_paciente" required>
                </div>
                <div class="form-group">
                    <fieldset>
                        <legend>Tipo de Atendimento:</legend>
                        <label><input type="radio" name="tipo_entrada" value="regular" checked> Regular</label>
                        <label><input type="radio" name="tipo_entrada" value="prioritario"> Prioritário</label>
                    </fieldset>
                </div>
                <button type="submit">Adicionar Paciente</button>
            </form>
        </div>

        <div class="fila-container">
            <h2>Estado Atual da Fila</h2>
            <div class="actions">
                <?php if (!empty($_SESSION['filaAtendimento'])): ?>
                    <a href="questao19.php?acao=atender" class="button">Atender Próximo Paciente</a>
                <?php endif; ?>
            </div>
            <?php if (empty($_SESSION['filaAtendimento'])): ?>
                <p>A fila de atendimento está vazia.</p>
            <?php else: ?>
                <ol>
                    <?php foreach ($_SESSION['filaAtendimento'] as $paciente): ?>
                        <li><?php echo $paciente; ?></li>
                    <?php endforeach; ?>
                </ol>
            <?php endif; ?>
        </div>
        
        <a class="reset-link" href="questao19.php?acao=resetar">Resetar Fila</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>