<?php

session_start();

$nome = $_SESSION['nome'];

echo "<h2>Bem-vindo, $nome!</h2>";

?>