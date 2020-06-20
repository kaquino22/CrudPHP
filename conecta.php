<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola";

    $conexao = new MySQLi("$host","$usuario","$senha","$banco");

    $conexao -> set_charset("utf8");

    if ($conexao -> connect_error) {
        echo "Erro de Conexão!!";
    } else {
        echo "Conectado com Sucesso!!";
    }

?>