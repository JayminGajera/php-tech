<?php

//write and appending files in php
// $fptr = fopen('demo1.txt','w');
// fwrite($fptr,'this is the write file.');
// fwrite($fptr,'this is another write file.');

// fclose($fptr);

//appending to a file in php
$fptr = fopen('demo1.txt','a');
fwrite($fptr,'this is being appended to the file');
fclose($fptr);

?>