<?php
//chamando o arquivo php de "index.php" usando a função "include"
include 'index.php';

echo "O $nome tem $idade anos de idade <br> <br>";

//chamando o arquivo php de "index.php" usando a função "require"
require 'index.php';

echo "Sua idade é $idade anos, e seu nome é $nome";