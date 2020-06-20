<?php
    include 'conecta.php';

    $email = $_POST['email']; 
    $senha = $_POST['senha'];

    $consulta = "SELECT *FROM clientes WHERE email = '$email' AND senha = '$senha'";

    $resultado = $conexao -> query($consulta);

    $registros = $resultado -> num_rows;

    $resultado_usuario = mysqli_fetch_assoc($resultado);
    
    if ($registros == 1) {
        header('Location: restrita.php');

    }else{
        header('Location: index.html');
    }


?>
