<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Menu Principal - Prática 3</title>
    <style>
        body { font-family: sans-serif; max-width: 700px; margin: 2em auto; background-color: #f4f4f9; }
        h1 { color: #333; text-align: center; }
        .menu-container { background-color: white; padding: 2em; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        ul { list-style: none; padding: 0; }
        li { margin: 12px 0; }
        a { 
            text-decoration: none; 
            font-size: 18px; 
            color: #007BFF; 
            display: block; 
            padding: 10px 15px; 
            border-radius: 5px; 
            transition: background-color 0.3s, color 0.3s;
        }
        a:hover { 
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <h1>Menu de Exercícios - Prática 3 (Arrays)</h1>
        <ul>
            <?php
            // Laço de repetição para gerar os links de 1 a 20
            for ($i = 1; $i <= 20; $i++) {
                // Formata o número para ter sempre dois dígitos (ex: 1 -> 01, 10 -> 10)
                $numero_questao = sprintf("%02d", $i);

                // Cria a URL para o arquivo de formulário correspondente
                $url = "/formularios/questao{$i}.php";

                // Exibe o item da lista com o link formatado
                echo "<li><a href='{$url}'>Questão {$numero_questao}</a></li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>