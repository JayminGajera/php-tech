<?php

    //what is session? => use to mange information accros to the different pages.

    session_start();
    $_SESSION['username'] = 'jaymin';
    $_SESSION['favCat'] = 'books';

    echo "we have saved your session";


?>