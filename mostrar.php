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
<center><h1><?php
echo "Usuario: </h1><h3>".$user->getNome();
echo "<br>";
echo "</h3><h1>CPF:</h1><h3>".$user->getCpf();
echo "<br>";
echo "</h3><h1>Endereco: </h1><h3>".$user->getEndereco();
?></h3>

</center>
</body>
</html>