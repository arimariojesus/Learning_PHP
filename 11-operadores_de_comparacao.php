<?php
/* Operadores de comparação
* ==    igual
* !=    não igual
* ===   idêntico
* !==   não idêntico
* <>    diferente
* <     menor que...
* >     maior que...
* <=    manor ou igual
* >=    maior ou igual
* <=>   spaceship (faz comparações combinadas)
        Ex: 1 <=> 1 = 0 (se iguais retorna 0)
            1 <=> 2 = -1 (se primeiro menor que o segundo retorna -1)
            2 <=> 1 = 1 (se primeiro maior que o segundo retorna 1)
*/

if(10 != 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;