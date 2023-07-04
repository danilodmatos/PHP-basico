<?php

//MUDANDO TIPOS DE DADOS

//(string)
//(boolen)
//(float) //no PHP float e double são sinonimos, tendo o uso para o mesmo fim, são pontos flutuantes, pode ser usado um outro
//(double) ^^^^^^^^
//(interger)
//(object)
//(array)

/*Essas maneiras aqui a baixo de transformar um tipo em outro são as mesmas das de cima, so mudando a maneira qe vocÊ vai utilizar*/
//intVal
//floatVal
//doubleVal
//strVal
//boolVal

//Mudando um tipo de dado para outro tipo de dado: (você coloca o tipo de dado que você quer mudar dentro do parenteses ())
//EX.1:
/*$name = "danilo";  //obs.: se eu colocar aqui uma string vazia (''), ele vai transformar o valor booleano em falso

$change = (boolean) $name;    //change => mudar
var_dump($change);*/

//EX.2: (transformando number em boolean)
/*$number = 21;

$change= (boolean) $number;
var_dump($change);*/

//EX.3: (transformando number em string)
/*$number = 21;

$change = (string) $number;
var_dump($change);*/

//EX.4: (transformando float em interger)
/*$number = 21.55; // ao ser transformado em interger, perde as casas decimais

$change = (integer) $number;
var_dump($change);*/

//EX.5: (transformando array em object)
/*$names = ['Danilo', 'Edson', 'Marcio'];

$change = (object) $names;
var_dump($change);*/

//Como recupero um objeto no php?
/*$person = ['name' => 'Danilo', 'age'=>'21'];

$change = (object) $person;
var_dump($change -> name);*/

//Se eu tiver um objeto e quiser transformar em um array? (geralmente não faz tanto sentido fazer isso)
/*class person{
    private $name;
    public function teste()
    {
        return 'teste';
    }
}

$person =new person;
$change = (array) $person;

var_dump($change);*/

//Mudando os tipos de dados usando aquelass outrass maneiras:
$person = 'Danilo';

$change = boolval($person);
var_dump($change);