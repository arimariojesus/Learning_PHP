<?php
/* Funções para strings
*  strtoupper   - transforma a string para maiúscula
*  strtolower   - transforma a string para minúscula
*  substr       - retorna apartir de um caracter com tamanho definido
*  str_pad      - complementa uma string com caracteres especificados
*  str_repeat   - repete uma string x vezes e retorna-a
*  strlen       - retorna o comprimento de uma string
*  str_replace  - substitui uma palavra em um texto
*  strpos       - retorna a posição de uma palavra em uma string
*/

// strtoupper()
$nome = "Arimário Jesus";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<hr>";

// strtolower()
$novoNome = strtolower($nome);
echo $novoNome;
echo "<hr>";

// substr()
$mensagem = "Olá mundo";
echo substr($mensagem, 4, 4);
echo "<hr>";

// str_pad()
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "*/", STR_PAD_BOTH); // STR_PAD_BOTH distribui os caracteres nos dois lados (left and right)
echo $novoObjeto;
echo "<hr>";

// str_repeat()
$string = str_repeat("Sucesso!", 5);
echo $string;
echo "<hr>";

// strlen()
$mensagem = "Olá mundo";
echo strlen($mensagem);
echo "<hr>";

// str_replace()
$texto = "A seleção Argentina será campeã da copa do mundo de 2018.";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;
echo "<hr>";

//strpos()
$posicao = strpos($texto, "copa");
echo $posicao;