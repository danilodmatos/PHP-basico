<?php

// para você reaproveitar seu codigo, vocÊ precisa usar funções
//vamos supor que você tem uma conexão com o banco de dados, e você queira fazer a listagem dos dados de uma tabela, e depois em outra parte do seu sistema você queira fazer listagem dos dados de outra tabela - (ter que toda hora criar toda estrutura, pra fazer uma listagem de caada um das tabelas é uma coisa muito chata e nada produtivo, ainda mais s evocê estiver trabalhando com PDO) 

function connection(){       //coloque na function um nome que faça sentido, nesse exemplo é uma função que está se conectando ao banco de dados
// O parenteses () serve para passar algum valor de fora e vai ser resgatado dentro da função {}

$pdo = new PDO('mysql:host=localhost:dbname=form_php', 'root', '');
return $pdo;    //é colocado o RETURN, pois preciso retornar alguma coisa de dentro dessa função; quando eu chamar a função: CONNECTION, ela precisa ter a conexão com o banco de dados
}  

//para executar a função connection:

function getData(){      //Essa funçao "getData" serve para pegar os dados de um tabela la do banco de dados
$connection = connection();   //como estou retornando algo de dentro da função, no caso o PDO, posso agora atriubuir o PDO  a uma variavel; // estou aqui tambem executando uma função dentro e outra função

$querry = $connection->query("select * from users");
$querry ->execute();
return $querry->fetchAll();
}


var_dump(getData()) ;      //para executar o getData(), é so chamar; o var_dump é para mostrar no navegador

 