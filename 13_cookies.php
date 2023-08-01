<?php

    echo "welcome to the world of cookie.";

    //syntex of set cookie (name,value,expire,domain)
    setcookie('category','books',time() + 86400,'/');

    echo "cookie is set check in you network";

?>