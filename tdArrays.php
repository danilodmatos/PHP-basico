<?php
// Arrays

//Para que você tem que cria um FUNÇÃO array?
// um variavel so pode comportar um valor, e quando você quer guardar mais um valor dentro de uma variavel, você cria um ARRAY

$data = ['Alexandre', 'Maria', 'João', 34, true, false];

//como resgatar os valores?
/*print_r($data);*/

//Como faço para resgatar exatamente o que eu quero? (o var_dump tras os tipos dos valores: string, integer, booleano...)
/*var_dump($data);*/

//Como faço para resgatar um valor especifico? (cada elemento tem um indice especifico [0][1][3][4][5]..., eles existem para podermos manipular os elentos dentro do array)
var_dump($data[1]); //vai imprimir "Maria" pois seu indice é [1]
