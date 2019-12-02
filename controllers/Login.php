<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email && $senha == 1){
        header('Location: ../home.php');
    }else{
        echo 1;
    }
?>