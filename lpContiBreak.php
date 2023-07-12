<?php
$names = ['Danilo', 'Marcio', 'Junior'];

//Estou fazendo o looping no array(pegando os dados), e então vocé quer pular um valor, ou verificar se ta em um valor e parar a interação ali.

//CONTINUE: ele pula um indice
//BREAK: parar o looping em um determinado indice 

//FOR: 
/*for ($i=0; $i < count($names); $i++){
    if ($i === 1){
        continue;     //estou pulando o indice marcio[1]
    }
    echo $names[$i];
}*/

/*for ($i=0; $i < count($names); $i++){
    echo $names[$i];    //coloco antes do if para printar tambem o item marcio
    if ($i === 1){
        break;     //ele para no indice marcio[1]
    }
    
}*/

//FOREACTH:
/*foreach($names as $key => $name){
    if($key === 1){
        continue;    //pula marcio
    }
    echo $name;
}*/

/*foreach($names as $key => $name){
    echo $name;
    if($key === 1){
        break;    //para em marcio
    } 
}*/

//WHILE: (no while não da certo o CONTINUE)
/*$i= 0;
while ($i < count($names)){
    if($i === 1 ){
        continue;    //trava no terminal, não esta funcionando
    }
    echo $names[$i];
    $i++;
}*/

/*$i= 0;
while ($i < count($names)){
    echo $names[$i];
    if($i === 1){
        break;    //vai parar no indice [1]Marcio
    }
   
    $i++;
}*/

//DoWHILE: (no DoWhile não da certo o CONTINUE)
/*$i= 0;
do{
    if($i === 1){
        continue;  //trava no terminal, não esta funcionando
    }
    echo $names[$i];
    $i++;
} while ($i < count($names));*/

$i= 0;
do{
    echo $names[$i];
    if($i === 1){
        break;   //vai parar no indice [1]Marcio
    }
    $i++;
} while($i < count($names)); 