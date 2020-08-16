<?php
// while
$cont = 1;
while ($cont <= 10):
    echo "Contador é $cont <br>";
    $cont++;
endwhile;
echo "<hr>";

// do-while
$cont = 1;
do {
    echo "Contador é $cont <br>";
    $cont++;
} while ($cont <=10);
echo "<hr>";

// for
for ($cont = 1; $cont <= 10; $cont++):
    echo "O contador é $cont <br>";
endfor;
echo "<hr>";

// foreach
$cores = array("Verde", "Vermelho", "Azul", "Amarelo");

foreach($cores as $indice => $valor):
    echo $indice." - ".$valor."<br>";
endforeach;