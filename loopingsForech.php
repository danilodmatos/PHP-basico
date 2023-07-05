<?php
//Forech, em portugues: para cada

$names = ['Danilo','Marcio','Junior'];

foreach ($names as $key => $names){ //PARA CADA nome que tem dentro do array eles vão ser guardados dentro das duas variaveis $key e $name(ultimo), $key: chave, $name:valor. $names = [Danilo], [Marcio], [Junior] ; $key: [0], [1], [2].

    echo $key . '=>' . $names ; // '.' é operador de concatenação 

}