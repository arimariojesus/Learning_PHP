<?php
/*
* is_array($array) = verificar se uma determinada variável é um array
* in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
* array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
* array_values($array) = retorna um novo array com os valores do array passado como parâmetro
* array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
* array_pop($array) = exclui a última posição do array
* array_shift($array) = exclui a primeira posição do array
* array_unshift($array, "valor") = adiciona um ou mais elementos no início do array
* array_push($array, "valor", "valor") = adiciona um ou mais elementos no final de um array
* array_combine($key, $values) = mescla os dois arrays passados
* array_sum() = calcula a soma dos elementos de um array
* explode("/", "20/01/2001") = transforma string em array
* implode("-", $arr) = transforma array em string
*/

// is_array()
$nomes = array("Primo"=>"Rodrigo", "Vizinho"=>"Felipe", "Mãe"=>"Maria", "Pai"=>"José");

if(is_array($nomes)):
    echo "é um array";
else:
    echo "não é um array";
endif;
echo "<hr>";

// in_array()
if(in_array("Rodrigo", $nomes)):
    echo "Existe no array";
else:
    echo "Não existe no array";
endif;
echo "<hr>";

// array_keys()
$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";

// array_values()
$values = array_values($nomes);
print_r($values);
echo "<hr>";

// array_merge()
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

// array_pop()
print_r($carros);
echo "<br>";
array_pop($carros);
print_r($carros);
echo "<hr>";

// array_shift()
print_r($motos);
echo "<br>";
array_shift($motos);
print_r($motos);
echo "<hr>";

// array_unshift()
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

// array_push()
array_push($frutas, "Cacau", "Abacaxi");
print_r($frutas);
echo "<hr>";

// array_combine()
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Flamengo", "Botafogo");

$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

// array_sum()
$soma = array(5, 6, 10, 8);
$total = array_sum($soma);
echo $total;
echo "<hr>";

// explode()
$data = "31/01/1999";

$novaData = explode("/", $data);
print_r($novaData);
echo "<hr>";

// implode()
$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");

$string = implode(", ", $nomes);
echo $string;