<?php

function activepageId($page){
    if (strpos($_SERVER["PHP_SELF"], $page)) {
        echo 'active';
    }
} 



?>