<?php
//Numbers
//temos 2 tipos de valores numericos no php: inteiros, e não inteiros

//34 - integer
//34.45 - double(é o float)

/*echo gettype(34);*/ //imprime= integer

/*echo gettype(34.45);*/ //imprime= double(é o float)

//Para fazer cauculos aritmeticos:

/*$number1 = '34';    //ao contrario do JS (que quando vc soma uma string com um numero ele caba concatenando/juntando os dois), no php ele faz todos os cauculos  quando ele peercebe que o que estád entro da string é um número, mas por ex: se puser o valor da variavel 'joão'+56, vai dar erro
echo $number1 + 56;*/

//Agora quero verificar se o que eu to fazendo no cauculo, é um valor numerico ou não, para isso existe a função: "is_numeric()", ele verifica se é um número

$number1= 10;
$number2= '20'; //um numero dentro de uma string ele tambem entende que é um número; mas se eu colocar '20 jsjd' com algumas letras, ele não lê 

if(is_numeric($number1) && is_numeric($number2)){
echo 'é numerico';}
else{
    echo 'não é numerico';
}