<?php
// Exemplo de concatenação
$rua = "Rua do Senai, 1000";
$bairro = "3d do aprendizado"; 
$cidade = "Santo Andre"; 
$cep = "03001-000";
$enderecocompleto = $rua . "-" . $bairro . "-" . $cidade . "-" . $cep;
print $enderecocompleto;
?>