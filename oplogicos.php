<?php

//&& = (e), || = (ou) 

$canAccess = true; //pode acessar
$isOlder = false; //é mais velho

/*$result = $canAccess && $isOlder; //os dois tem que ser verdadeiro, para que o resultado final seja verdadeiro

var_dump ($result);*/

$result = $canAccess || $isOlder; // está sendo verificado se um dos dois é verdadeiro, se um dos dois for verdadeiro ele retorna verdadeiro

var_dump ($result);