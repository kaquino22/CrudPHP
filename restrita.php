<?php
    session_start(); 
    if (
        (!isset($_SESSION['id'])== true) &&
        (!isset($_SESSION['nome'])== true) &&
        (!isset($_SESSION['email'])== true)){
    
        
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
    
        header('Location: index.html');
    }

    echo "BEM VINDO A UMA PÁGINA RESTRITA....";
    echo "<br>";
    echo "Mas nem tão restrita por enquanto....!!!";


?>

<a href="logout.php">SAIR</a>