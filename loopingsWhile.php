<?php
//while, em portugues: enquanto

$names = ['Danilo', 'Marcio', 'Junior'];

$i = 0;
while ($i < count($names)){  //enquanto ele for verdadeiro, vai ser executado o que está dentro; o while so vai executar se o que tiver dentro das {} for verdadeiro
    echo $names[$i];
    $i++; // aqui estará por incrementando, dai na proxima vez que chamar terá um outro valor, ele começa no [0]= Danilo, depois [1]= Marcio, depois[2]= Junior, até a condição ela ser falsa(então ele vai parar)
}
