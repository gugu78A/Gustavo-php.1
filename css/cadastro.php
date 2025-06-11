<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php
    $nome=$_POST['nome'] ?? ''; 
    $email=$_POST['email'] ?? '';
    $idade=$_POST['idade'] ?? '';
    $curso=$_POST['curso'] ?? '';

    if($nome&&$email&&$idade&&$curso)
    {
    $linha = "Nome:  $nome | Email: $email | Idade: $idade | Curso: $curso\n";
    file_put_contents("cadastro.txt",$linha,FILE_APPEND);

    echo "<h1>Dados recebidos </h1><br>";
    echo "Nome: ".$nome."<br>";
    echo "email: ".$email."<br>";
    echo "Idade: ".$idade."<br>";
    echo "Curso: ".$curso."<br>";
    echo "<a href= 'index.html' > Novo Cadastro</a>";

    }
else
{
    echo "Todos os campos são obrigatórios";
}

?>
</body>
</html>
