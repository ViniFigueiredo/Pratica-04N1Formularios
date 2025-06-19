<?php
// A lógica só é executada se a página for acessada via POST do formulário.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. GERAR NÚMEROS ALEATÓRIOS
    $numerosSorteados = [];
    for ($i = 0; $i < 10; $i++) {
        $numerosSorteados[] = rand(1, 60);
    }

    // 2. FUNÇÃO PARA VERIFICAR SE UM NÚMERO É PRIMO
    // A implementação é otimizada, verificando apenas até a raiz quadrada do número.
    function ehPrimo($numero) {
        if ($numero < 2) {
            return false;
        }
        for ($i = 2; $i * $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // 3. CONTAR A QUANTIDADE DE NÚMEROS PRIMOS
    $quantidadePrimos = 0;
    foreach ($numerosSorteados as $numero) {
        if (ehPrimo($numero)) {
            $quantidadePrimos++;
        }
    }
} else {
    // Se o acesso for direto, redireciona para a página do formulário.
    header('Location: /pweb/formularios/questao4.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 04: Sorteio e Números Primos</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f0f7ff; text-align: center; }
        .container { max-width: 800px; margin: 2em auto; background-color: white; padding: 2em; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        h2 { color: #555; }
        .numeros-sorteados { display: flex; justify-content: center; flex-wrap: wrap; gap: 15px; margin: 2em 0; }
        .numero { width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; border-radius: 50%; background-color: #e9ecef; color: #343a40; font-size: 24px; font-weight: bold; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .numero.primo { background-color: #28a745; color: white; border: 2px solid #218838; }
        .resultado { font-size: 22px; font-weight: bold; color: #007BFF; margin-top: 1em; }
        .link-voltar { display: inline-block; margin-top: 2em; background-color: #007BFF; color: white; padding: 12px 25px; border-radius: 50px; text-decoration: none; transition: background-color 0.2s; }
        .link-voltar:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sorteio e Números Primos</h1>
        
        <h2>Números Sorteados:</h2>
        <div class="numeros-sorteados">
            <?php
            // Itera sobre os números sorteados para exibi-los
            foreach ($numerosSorteados as $numero) {
                // Verifica se o número é primo para adicionar a classe CSS 'primo'
                $classe_css = ehPrimo($numero) ? 'primo' : '';
                echo "<span class='numero {$classe_css}'>{$numero}</span>";
            }
            ?>
        </div>

        <p class="resultado">
            Quantidade de números primos: <?php echo $quantidadePrimos; ?>
        </p>

        <a class="link-voltar" href="../formularios/questao4.php">&larr; Sortear Novos Números</a>
        <div style="text-align:center; margin-top:2em;">
            <a href="../index.php">retornar a página inicial</a>
        </div>
    </div>
</body>
</html>