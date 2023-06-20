<?php
//Tipos de dados - Booleans
//Booleans - true, false

//Quando vou usar um valor boobleano true ou false puro, ex.: num login

/*$_SESSION['logged'] = false;

//script, script, script...

$_SESSION['logged'] = true;

if ($_SESSION['logged']){
    echo 'é verdadeiro';
}*/

//Nesse código, está sendo utilizado o conceito de variáveis booleanas para controlar o estado de login de um usuário.
//Inicialmente, a variável $_SESSION['logged'] é definida como false, indicando que o usuário não está logado. Em seguida, o código executa algumas operações ("script, script, script...") e, em algum momento, o usuário faz o login com sucesso.
//Após o login ser realizado com sucesso, a variável $_SESSION['logged'] é atualizada para true, indicando que o usuário está logado.
//No trecho seguinte, o código verifica se $_SESSION['logged'] é true usando a estrutura condicional "if". Se o valor for true, a mensagem "é verdadeiro" será exibida.
//Basicamente, essa abordagem permite que o sistema controle o estado de login do usuário usando uma variável booleana. Se o valor for true, significa que o usuário está logado, enquanto false indica que o usuário não está logado. Isso pode ser útil para permitir ou negar o acesso a determinadas áreas do sistema com base no estado de login.

//A superglobal $_SESSION é usada para armazenar e acessar dados da sessão do usuário, como visto na pergunta anterior.

//EXEMPLO 2: (LOOPING)

/*for ($i = 0;$i <= 10;$i++){
    echo $i;
}*/

//o loop for é definido com as seguintes partes:

//    Inicialização: $i = 0 - define o valor inicial da variável $i como 0.
//    Condição: $i <= 10 - o loop continuará enquanto a condição for verdadeira, ou seja, enquanto $i for menor ou igual a 10.
//    Incremento: $i++ - incrementa o valor de $i em 1 a cada iteração do loop.
//    Corpo do loop: echo $i; - imprime o valor atual de $i.
//    Dessa forma, o código irá imprimir os números de 0 a 10, inclusivamente.

// Se liga => Um valor booleano não é exclusivamente o valor puro TRUE e FALSE, você pode utilizar ambos, mas muitas vezes vai ter que usar valores que não são propriamente valores booleanos TRUE e FALSE, mas que se comportam como esses valores TRUE e FALSE

$name = 'Danilo';
$age = 21;
$logged = false;  //valor pulo booleano 'false'


if($name === 'Danilo' && $age > 18 && $logged === true){ //os três precisam ser verdadeiros, precisam retornar o valor booleano verdareiro para que todos sejam verdadeiros, e por fim executar os "ECHO"
    echo 'é verdadeiro';
}
else{
   echo'é falso';
}

//OBS.: SE VOCÊ QUISER TRABALHAR POR EXEMPLO COM UMA VARIAVEL COMO SE ELA FOSSE UMA VALOR BOOLEANO PURO, FAÇA ASSIM:

// $name =!!'Danilo';    ("!!" transforma a variavel em true)
// if($name = true);     (onde iria coloca o nome coloco o valor booleno "true")