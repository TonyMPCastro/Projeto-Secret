<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOSTRAR</title>
</head>
<body>

<?php
require_once 'usuario.php';
$user = new Usuario;
$nome = "Antonio Marcos";
$cpf = "6169";
$end = "Rua três";

$user->setNome($nome);
$user->setCpf($cpf);
$user->setEndereco($end);

?>
<h1><?php
echo "Usuario: </h1><h2>".$user->getNome();
echo "<br>";
echo "</h2><h1>CPF:</h1><h2>".$user->getCpf();
echo "<br>";
echo "</h2><h1>Endereco: </h1><h2>".$user->getEndereco();
?></h2>
<?php
$user2 = new Usuario;
$nome = "Antonio ";
$cpf = "6169";
$end = "Rua três";

$user2->setNome($nome);
$user2->setCpf($cpf);
$user2->setEndereco($end);

?>
<h1><?php
echo "Usuario: </h1><h2>".$user2->getNome();
echo "<br>";
echo "</h2><h1>CPF:</h1><h2>".$user2->getCpf();
echo "<br>";
echo "</h2><h1>Endereco: </h1><h2>".$user2->getEndereco();
?></h2>

</body>
</html>