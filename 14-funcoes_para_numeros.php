<?php
/* Funções para números
*  number_format - formata um número
*  round  - arredonda valores
*  ceil   - arredonda valores apenas para cima
*  floor  - arredonda valores apenas para baixo
*  rand   - gera números randomicos
*/

// number_format()
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";
echo "<hr>";

// round()
echo round(3.55);
echo " | ";

// ceil()
echo ceil(8.10);
echo " | ";

// floor()
echo floor(8.99);
echo "<hr>";

// rand()
echo rand(1, 20);