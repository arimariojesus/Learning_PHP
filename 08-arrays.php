<?php
// Arrays
// -  numéricos
$carros = array(1=>"Uno", 2=>"Gol", 3=>"Onix");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<hr>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";

// Count - quantidades de elementos de uma array
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

// Foreach - percorre cada posição do array
foreach($clientes as $valor) {
    echo $valor."<br>";
}
echo "<hr>";
// Arrays
// -  associativos
$pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
$pessoa["cidade"] = "Itabuna";

foreach($pessoa as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";

// Arrays
// -  multidimensionais
$times = array(
        "cariocas" => array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
        "paulistas" => array("santos", "são paulo", "palmeiras"),
        "baianos" => array("bahia", "vitória", "itabuna")
    );
echo $times["paulistas"][0];
echo "<br>";

foreach($times["cariocas"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}