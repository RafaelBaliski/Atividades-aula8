<?php

$numero1 = (int)$_POST['numero1'];
$numero2 = (int)$_POST['numero2'];

$soma = $numero1 + $numero2;

print "A soma é: $soma";

echo "<br><br>";

echo "Tipos das variáveis:<br>";

var_dump($numero1);

echo "<br>";

var_dump($numero2);

echo "<br>";

var_dump($soma);

?>