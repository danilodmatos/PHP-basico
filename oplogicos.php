<?php

//&& = (and), || = (or), !(NEGAÇÃO)

$canAccess = true; //pode acessar
$isOlder = false; //é mais velho

/*$result = $canAccess && $isOlder; //os dois tem que ser verdadeiro, para que o resultado final seja verdadeiro, e vice versa para falso

var_dump ($result);*/

//$result = $canAccess || $isOlder; // está sendo verificado se UM dos dois é verdadeiro, se UM dos dois for verdadeiro ele retorna verdadeiro

//var_dump ($result);

//var_dump(!$canAccess); //o "canAccess" é um valor (true), quando coloco "!", quando coloc um sinal de negação antes de um valor booleno, ele troca o valor, (no caso aqui transforma para falso)

var_dump(!!$canAccess); //se colocar "!!" dois sinais, ele continua com o mesmo valor

/*function ePar(int $n) {
    if ($n % 2 != 0) {
        return "é impar";
    } 
    return "é par";
}
echo ePar(4);*/ //função para ser um numero é imprar ou par usndo "!"

// Extra:
//Os Valores "TRUTHY" e "FALSY" são valores que se comportam como valores booleanos, mas não são valores booleanos



