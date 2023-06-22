<?php

//tudo que estiver dentro de aspas simples ou aspas duplas é considerado uma string

//=> quando usar aspas simples ou duplas:

//Você vai utilizar aspas duplas quando você quiser usar uma variavel dentro de uma string:
//ex:
/*$age = 38;
$name = "Alexandre $age";

echo $name;*/

//É usado tambem {}, para destacar o que é e o que não é uma variavel
//dica: o STRLEN conta quantos caracteres tem na string
//ex:
/*$age = 38;
$name = "Alexandre ajfbfdbdsvsbvdsb {$age} efnkfnndfndsnfnsnofnosdnfofn {$age} fnfnnfsfdsm";

echo strlen($name);*/

//Dica o "substr" ele corta a string até onde vocÊ quer
/*$age = 38;
$name = "Alexandre ajfbfdbdsvsbvdssddsssfgdgddsdfdsfsfb {$age} efnkfnndfndsnfnsnofnosdnfofn {$age} fnfnnfsfdsm teste";

echo substr($name, 0, 35);*/

//Dica o "str_contains", ele verifica se um string contem alguma coisa
$age = 38;
$name = "Alexandre ajfbfdbdsvsbvdssddsssfgdgddsdfdsfsfb {$age} efnkfnndfndsnfnsnofnosdnfofn {$age} fnfnnfsfdsm teste";

echo str_contains($name, 'teste');