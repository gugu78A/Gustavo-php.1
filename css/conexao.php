<?php
    $hostname= "localhost";
    $database= "cadastrado";
    $username="root";
    $password= "";
    $porta=3306;

    //Criando a conexão com o banco de dados
    $conn = new mysqli($hostname,$database,$username,$password,$porta);

    //Verifica a conexao
    if($conn)
    {
        echo "conectado\n";
    }
    else{
        echo "não conectado"
    }



?>