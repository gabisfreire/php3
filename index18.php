<?php

$booleano1 = true;
$booleano2 = false;
$booleano3 = true;

if ($booleano1 and $booleano2) {
    echo "Verdadeiro";
} else {
    echo "Falso";
}

if ($booleano1 or $booleano2) {
    echo "Verdadeiro";
} else {
    echo "Falso";
}

if ($booleano1 xor $booleano3) {
    echo "Verdadeiro";
} else {
    echo "Falso";
}

if ($booleano1 || $booleano3) {
    echo "Verdadeiro";
} else {
    echo "Falso";
}

?>