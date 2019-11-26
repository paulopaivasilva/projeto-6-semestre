<?php
    $sessao = false;
    if(!$sessao) header('Location: ./login.html');
    else header('Location: ./home.php');
?>