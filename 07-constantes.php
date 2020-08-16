<?php
// CONSTANTES
define("NOME", "Arimário Jesus");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", false);

define("TIMES", ['vasco', 'flamengo', 'santos']);

echo 'Meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA.'.';
echo "<hr>";
echo var_dump(TIMES);

function exibeNome() {
    // Constantes automaticamente são globais.
    echo NOME;
}

exibeNome();