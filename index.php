<?php
    //$login = 'a';
    if(isset($login)){
        include "Components/Home/index.php";
    } else {
        include "Components/Login/index.php";
    }
?>