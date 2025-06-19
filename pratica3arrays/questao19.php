<?php
$filaAtendimento = ['João Silva', 'Maria Santos', 'Pedro Costa'];

array_unshift($filaAtendimento, 'Ana Oliveira');

$filaAtendimento[] = 'Luiz Fernandes';

echo "Estado atual da fila de atendimento:\n";
print_r($filaAtendimento);
?>
<div style="text-align:center; margin-top:2em;">
    <a href="../index.php">retornar a página inicial</a>
</div>