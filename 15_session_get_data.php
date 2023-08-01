<?php

    session_start();

    if(isset($_SESSION['username'])){
        echo "welcome " . $_SESSION['username'];
        echo "<br> your favourite category is ". $_SESSION['favCat'];
    }else{
        echo "please loggin to continue";
    }

    

?>