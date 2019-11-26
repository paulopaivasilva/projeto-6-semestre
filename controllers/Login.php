<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email && $senha){
        header('Location: ../home.php');
    }
?>