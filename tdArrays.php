<?php
// Arrays

//Para que você tem que cria um FUNÇÃO array?
// um variavel so pode comportar um valor, e quando você quer guardar mais um valor dentro de uma variavel, você cria um ARRAY

    /*$data = ['Alexandre', 'Maria', 'João', 34, true, false];*/

//como resgatar os valores?
    /*print_r($data);*/

//Como faço para resgatar exatamente o que eu quero? (o var_dump tras os tipos dos valores: string, integer, booleano...)
    /*var_dump($data);*/

//Como faço para resgatar um valor especifico? (cada elemento tem um indice especifico [0][1][3][4][5]..., eles existem para podermos manipular os elentos dentro do array)
    /*var_dump($data[1]);*/ //vai imprimir "Maria" pois seu indice é [1]


//Quando vc ja escreveu um monte de codigo por ex. e quer add um codigo no array:

    /*$data[7] = 'teste';
    var_dump($data[7]);*/

//Contar começando do 1:
/*$contar = count($data); //"count" vai contar o tanto de elementos no array, ele começa contando no nº:1(1,2,3,4...)
    $data[$contar] = 'teste';
    var_dump($data);*/

// Outra maneira de add um novo elemento ao array é: "array_push"

/*array_push($data, 'teste');
var_dump($data);*/

//para add um novo elemento ao começo do array é: "$data[0]" > coloca [0], porem o que era [0] vai sumir= 'alexandre'
/*$data[0] = 'teste';
var_dump($data);*/

//Como fazer para adicionar no começo, e o que era o 1º passará para 2º: (array_unshift())
/*array_unshift($data, 'teste');
var_dump($data);*/

//Até então vimos uma maneria de manipular o array utilizandos indices que foram criaados automaticamentes pelo PHP
//Mas... e se agora quiser criar indices especificos?

/*$person = ['name' => 'Alexandre', 'age' => 38];*/

//resgantando:
/*var_dump($person['name']);*/

//Se eu botar o indice [0], vai da erro, que não existe, porque arrays com idices especificos(que eu mesmo criei), não existe indice [0]

//ARRAYS DENTRO DE ARRAYS (Array multidimensional):
$person = [
    'name' => 'Alexandre', 'age' => 38, 
    'documents' => [
        'cpf'=> '78391319393', 'rg'=> '38713734731', 'nationality' => 'imperatriz' ]
];

//var_dump($person['documents']);      /*assim é feito para resgatar o documnets, e vai imprimir todo o array que ele é*/
var_dump($person['documents']['cpf']); /*assim é feito para resgatar apenas o cfp*/