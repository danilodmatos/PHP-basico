<?php


//string
//echo gettype ('letras letras letras');

//numbers - intergers, float(double)
//echo gettype (12.5);

//boleans
//echo gettype (true);

//arrays
//echo gettype (['letras letras letras', 12]);

//obeject
/*class Pessoa{

}

echo gettype(new Pessoa);*/

//null
//echo gettype (null);

/*$name = 'Danilo';
$number = 23;
echo gettype ($number);*/

// sem/com REFERENCIA:

// _EX. 1:_

/*$name = 'danilo';

$myName = $name;

$name = 'jairo';

echo $name;
echo $myName;*/

// _EX. 2:_

$name = 'danilo';

$myName = &$name;

$name = 'jairo';

echo $name;
echo $myName;