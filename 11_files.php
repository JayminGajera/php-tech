<?php

    // $a = readfile('demo.txt'); 
    // echo $a; //it will give you how many word in file  after text printed

    // readfile('demo.txt');

    // $fptr = fopen('demo.txt','r');
    
    // if(!$fptr){
    //     echo "unable to read file.";
    // }

    // $content = fread($fptr,filesize('demo.txt'));
    // echo $content;

    // fclose($fptr);

    $fptr = fopen('demo.txt','r');
    // echo fgets($fptr);//it is read file line by line
    echo fgetc($fptr);//it is read file character by character


?>