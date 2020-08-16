<?php

$nome = 'Arimário Jesus';
echo "<br>";
// Aspas simples '' são literais, não interpretam variáveis, então é preciso concatená-las.
echo 'Meu nome é ' .$nome. ' e minha idade é \'21\'';
echo '<hr>';
// Aspas duplas "" são interpretativas, as variáveis são convertidas na hora e executar as strings.
echo "Meu nome é \"$nome\"";