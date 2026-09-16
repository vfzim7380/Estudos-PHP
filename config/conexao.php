<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "medico";

    $conexao = new mysqli($hostname, $username, $password, $dbname);
    // Check connection
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }
    echo"Sucesso ao se conectar";
?>