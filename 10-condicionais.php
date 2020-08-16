<?php
 
// if
// else
// elseif
$numero = 0;

if ($numero > 0):
    echo "O número é 'maior' que zero";
elseif ($numero == 0):
    echo "O número é 'igual' a zero";
else:
    echo "O número é 'menor' que zero";
endif;

echo "<hr>";

// Operador Ternário
$media = 7;
echo ($media >= 7) ? "Aprovado!": "Reprovado";
echo "<hr>";

// Switch
$cor = "vermelho";

switch ($cor):
    case "vermelho":
        echo "A cor é vermelho";
    break;

    case "verde":
        echo "A cor é verde";
    break;
    
    case "azul":
        echo "A cor é azul";
    break;

    default:
        echo "A cor não é vermelho, verde, nem azul";

endswitch;
echo "<hr>";