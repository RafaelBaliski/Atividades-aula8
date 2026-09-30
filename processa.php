<?php

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

echo "Nome: $nome";
echo "<br>";
echo "Cidade: $cidade";
echo "<br>";

if ($cidade == "Curitiba") {
    echo "Curitibano!";
} else {
    echo "Seja bem-vindo!";
}

?>