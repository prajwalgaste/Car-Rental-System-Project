<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect('localhost','root','manager','carproject');
    if(!$con)
    {
        echo 'please check your Database connection';
    }

?>
