<?php
$nome = $POST['nome'];
$email = $POST['email'];
$senha = $_POST['senha'];

echo "Nome é $nome";
echo "<br>";
echo "E-Mail é $email";
echo "<br>";
echo "Senha é $senha";
echo "<br>";
echo "<br>";

print_r($_POST);


?>