<?php
    //$login = 'a';
    if(isset($login)){
        include "home\home.php";
    } else {
        include "inicio\inicio.php";
    }
?>