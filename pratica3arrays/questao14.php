<?php
session_start();

if (isset($_GET['acao']) && $_GET['acao'] == 'resetar') {
    unset($_SESSION['registrosTreino']);
    header('Location: questao14.php');
    exit;
}

if (!isset($_SESSION['registrosTreino'])) {
    $_SESSION['registrosTreino'] = [
        ["aluno" => "Ana Silva", "resultados" => [45, 50, 55]],
        ["aluno" => "Bruno Costa", "resultados" => [10.5, 11.2, 10.8]],
        ["aluno" => "Carla Lima", "resultados" => [15, 20, 22]]
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeAluno = trim($_POST['nome_aluno']);
    $resultados_raw = $_POST['resultados'];

    if (!empty($nomeAluno) && !empty($resultados_raw)) {
        $resultados_str = explode(',', $resultados_raw);
        $resultadosNumericos = array_filter(array_map('trim', $resultados_str), 'is_numeric');

        if (!empty($resultadosNumericos)) {
            $novoRegistro = [
                "aluno" => htmlspecialchars($nomeAluno),
                "resultados" => array_map('floatval', $resultadosNumericos)
            ];
            $_SESSION['registrosTreino'][] = $novoRegistro;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 14: Registros de Treino de Academia</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .container { max-width: 800px; margin: 0 auto; }
        .registros-container { border: 1px solid #ccc; padding: 1.5em; }
        .registro-box { border-bottom: 1px solid #eee; padding: 1em 0; margin-bottom: 1em; }
        .registro-box:last-child { border-bottom: none; margin-bottom: 0;}
        h1, h2, h3 { color: #000; }
        h3 { padding-bottom: 0.5em;}
        .media { font-weight: bold; color: #007bff; }
        .melhor-resultado { font-weight: bold; color: #28a745; }
        .nav-link { display: block; margin-top: 1.5em; }
        .reset-link { display: block; text-align: center; margin-top: 1.5em; color: #888; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Adicionar Novo Registro de Treino</h1>
        <a class="nav-link" href="../formularios/questao14.html">&larr; Adicionar Novo Registro</a>
        <div class="registros-container">
            <h2>Resultados Individuais</h2>
            <?php if (empty($_SESSION['registrosTreino'])): ?>
                <p>Nenhum registro de treino encontrado.</p>
            <?php else: ?>
                <?php foreach ($_SESSION['registrosTreino'] as $registro): ?>
                    <div class="registro-box">
                        <h3><?php echo $registro['aluno']; ?></h3>
                        <p><strong>Resultados:</strong> <?php echo implode(', ', $registro['resultados']); ?></p>
                        <?php
                            $resultados = $registro['resultados'];
                            if (!empty($resultados)) {
                                $media = array_sum($resultados) / count($resultados);
                                $melhorResultado = max($resultados);
                                echo "<p class='media'>Média dos Resultados: " . number_format($media, 2, ',', '.') . "</p>";
                                echo "<p class='melhor-resultado'>Melhor Resultado: " . $melhorResultado . "</p>";
                            }
                        ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <a class="reset-link" href="questao15.php?acao=resetar">Resetar Todos os Registros</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>