<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 02: Lançar Notas do Boletim</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; max-width: 600px; margin: 2em auto; padding: 0 1em; }
        h1 { color: #333; text-align: center; }
        .boletim { list-style-type: none; padding: 0; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; }
        .boletim li { padding: 15px; border-bottom: 1px solid #ddd; display: flex; justify-content: space-between; align-items: center; }
        .boletim li:last-child { border-bottom: none; }
        .disciplina { font-weight: bold; }
        .status { padding: 5px 10px; border-radius: 4px; color: white; font-weight: bold; }
        .aprovado { background-color: #28a745; }
        .reprovado { background-color: #dc3545; }
        .nota { color: #555; }
        .link-voltar { display: block; text-align: center; margin-top: 20px; color: #007BFF; text-decoration: none; }
        .link-voltar:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Boletim Escolar</h1>

    <ul class="boletim">
        <?php
        // Verifica se o formulário foi submetido
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Cria o array associativo $boletim com os dados recebidos do formulário
            // Os valores são convertidos para float para garantir a comparação numérica correta
            $boletim = [
                "Português" => (float)$_POST['nota_portugues'],
                "Matemática" => (float)$_POST['nota_matematica'],
                "História" => (float)$_POST['nota_historia'],
                "Geografia" => (float)$_POST['nota_geografia']
            ];

            // Itera sobre o array para exibir cada disciplina e seu status
            foreach ($boletim as $disciplina => $nota) {
                // Determina o status e a classe CSS com base na nota
                if ($nota >= 7.0) {
                    $status = "Aprovado";
                    $classe_css = "aprovado";
                } else {
                    $status = "Reprovado";
                    $classe_css = "reprovado";
                }
                
                // Formata a nota para exibir sempre uma casa decimal
                $nota_formatada = number_format($nota, 1, ',', '.');

                // Exibe a linha da tabela do boletim
                echo "<li>";
                echo "  <span class='disciplina'>{$disciplina}</span>";
                echo "  <span class='nota'>Nota: {$nota_formatada}</span>";
                echo "  <span class='status {$classe_css}'>{$status}</span>";
                echo "</li>";
            }
        } else {
            echo "<li>Por favor, preencha as notas no formulário.</li>";
        }
        ?>
    </ul>

    <a class="link-voltar" href="../formularios/questao2.php">&larr; Voltar e Lançar Novas Notas</a>
    <div style="text-align:center; margin-top:2em;">
        <a href="../index.php">retornar a página inicial</a>
    </div>
</body>
</html>