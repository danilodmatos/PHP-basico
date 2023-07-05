<?php
//Do While, em portugues: faça enquanto

$names = ['Danilo', 'Marcio', 'Junior'];

$i=0;
do{ //FAÇA o que está aqui dentro {}
    echo $names[$i];
    $i++;
} while($i < count($names)); //ENQUANTO isso () for verdadeiro, e quando for falso vai parar