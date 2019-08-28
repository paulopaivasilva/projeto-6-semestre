<?php
    //$login = 'a';
    if(isset($login)){
        include "views\home\Header.html";
        include "views\home\Body.html";
        include "views\home\Footer.html";
    } else {
        include "views\inicial\Header.html";
        include "views\inicial\Body.html";
        include "views\inicial\Footer.html";
    }
?>