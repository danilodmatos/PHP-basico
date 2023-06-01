<?php

/*if (){

}*/ //dentro dos ( ) vai a condição verdadeira ou falsa

//O que estiver dentro dos parenteses tem que ser verdadeiro (mas não necessariamente o valor booleano truthy e false)

/*$number1 = 70;
$number2 = 50;

if ($number1 > $number2){
    echo 'é maior';
}*/

/*$number1 = 70;
$number2 = 50;
$isAdmin = false;

$resultado = $number1 > $number2 && $isAdmin; //quando se trabalha os sinais "&&" se a 1° parte for verdadeira, e 2° for verdadeira o resultado vai ser verdadeiro

if ($resultado){
    echo 'é verdadeiro';
}
else{
    echo 'é falso';
}*/

//↑↑↑↑↑↑↑↑↑ DESSA MANEIRA O CODIGO FICA UM POUCO "SUJO" ↑↑↑↑↑↑↑↑↑↑↑↑↑

//↓↓↓↓↓↓↓↓↓ MEIO PARA O CODIGO FICAR LIMPO USANDO O: "return" ↓↓↓↓↓↓↓↓

/*$number1 = 70;
$number2 = 50;
$isAdmin = true;

$resultado = $number1 > $number2 && $isAdmin;

if ($resultado){
    echo 'é verdadeiro'; 
    return;          //quando se usa o return o codigo para exatamente lá, caso não, ele pula para o proximo echo
}
  echo 'não é verdadeiro';*/

  //↓↓↓↓↓↓↓↓↓ USANDO OPERADORES TERNARIOS ↓↓↓↓↓↓↓↓

$number1 = 70;
$number2 = 50;
$isAdmin = true;

$resultado = $number1 > $number2 && $isAdmin;

echo ($resultado) ? 'é verdadeiro' : 'não é verdadeiro';
