<?php

/*define('NAME', 'Danilo');*/
//echo NAME;

/*function teste (){
    echo __FUNCTION__;
}
teste();*/
//printa o nome da função

/*function teste(){
    echo __METHOD__;
}
teste();*/
//Outro meio para printar o nome da função

/*echo DIRECTORY_SEPARATOR;*/
//imprime uma "\"

/*if (defined ('NAME')){
    echo 'foi definido';
}*/

$cons = get_defined_constants (true);
    var_dump ($cons);