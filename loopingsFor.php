<?php
//for, em portugues: para
$names = ['Danilo', 'Marcio', 'Edson'];

//como é a estrutura e como funciona o for:
    //começa com (i=0), depois faz  uma condição ($i<) se essa condição for satisfeita vai retornar verdadeiro e vai executar o que ta dentro das chaves, e depois ele pos incrementa ($i++) = Quando você utiliza o operador de pós-incremento em uma variável, o valor da variável é primeiro retornado (antes do incremento) e, em seguida, o valor é incrementado em 1. Em outras palavras, o valor original da variável é usado em uma expressão e depois incrementado. 

/*for($i=0; $i < count($names); $i++){ //'count($names)' vai retornar o numero total de elementos do arrat $names, vai printar até o 2, pois é a quantidade menor a 3 (3 é a quantidade de elementos no array)
    echo $i;
}*/

//Para retornar os nomes:
for($i=0; $i < count($names); $i++){
echo $names[$i]; //está chamando $names no indice $i; ele vai retornar todo os nomes, porque cada uma das vezes que esse looping for executado , o $i foi substituido pelo indice do array [0]= Danilo, [1]= Marcio, [2]= Junior
}
