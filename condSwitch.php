<?php

//O Switch, ao contrario do if ele trabalha com os valores, ELE VERIFICA O VALOR, se é o valor da variavel
//O "break" é colocado para não executar o debaixo
//se nenhum deles for o valor da variavel vai ser executado o "default".

$nome = 'John';

switch ($nome) {
    case 'Joel':
        echo 'é Joel';
        break;
    case 'John':
        echo 'é john';
        break;
    case 'Augusto':
        echo 'é augusto';
        break;
    default:
        echo 'não é nenhum dos nomes';
        break;
}