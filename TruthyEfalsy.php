<?php
//falsy - SÃO VALORES QUE SE COMPORTAM COMO VALORES BOOLEANOS FALSOS, MAS NÃO SÃO VALORES BOOLEANOS
//null       //null
//0          //integer
//0.0        //float
//"0"        //string
//" "        //empty string (STRING VAZIA)
//array()    //empty array (ARRAY VAZIO)

//truthy - O resto (TODO O RESTO)

//Quando estamos programando em PHP, usamos valores chamados booleanos para expressar algo que é verdadeiro ou falso. Existem dois valores principais que usamos: "verdadeiro" e "falso". Agora, imagine que você tem uma caixa e quer saber se ela está vazia ou não. Se a caixa estiver vazia, isso é considerado "falso" porque não há nada dentro dela. Mas se tiver alguma coisa dentro da caixa, mesmo que seja um brinquedo ou um papel, isso é considerado "verdadeiro" porque ela não está vazia. Então, quando você está escrevendo um programa em PHP e precisa verificar se algo é verdadeiro ou falso, você usa esses dois valores. Se algo é verdadeiro, é chamado de "truthy" (verdadeiro) e se algo é falso, é chamado de "false" (falso). Mas há algumas coisas interessantes! Por exemplo, mesmo que você não tenha nada dentro da caixa, no PHP isso ainda é considerado "truthy" porque a caixa existe. E, ao contrário, se você colocar a palavra "false" dentro da caixa, isso seria considerado "truthy" porque ainda há algo dentro dela. Então, "truthy" significa que algo é considerado verdadeiro, mesmo que não seja exatamente a palavra "verdadeiro". E "false" significa que algo é considerado falso

// AQUI ESTÁ UM EXEMPLO SIMPLES EM PHP PARA ILUSTRAR O CONCEITO DE "TRUTHY" E "FALSE":

$valor = 10;

/*if ($valor) {
    echo "O valor é truthy!"; 
} else {
    echo "O valor é false!";
}*/
//Nesse exemplo, temos uma variável chamada $valor que possui o valor 10. Em seguida, usamos uma estrutura condicional if para verificar se o valor é "truthy" ou "false". No caso, o valor 10 é considerado "truthy" porque é um número diferente de zero. Então, o programa irá imprimir "O valor é truthy!".

//AGORA, VAMOS MODIFICAR O VALOR DA VARIÁVEL $VALOR PARA 0 E EXECUTAR NOVAMENTE:

$valor = 0;

if ($valor) {
    echo "O valor é truthy!"; 
} else {
    echo "O valor é false!";
}
//Agora, como 0 é considerado "false", o programa irá imprimir "O valor é false!".