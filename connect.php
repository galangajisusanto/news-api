<?php

$connect = new mysqli("127.0.0.1","galang","Semarang12","app_news");

if($connect){
    //echo("Connection Successfull");
}else{
    echo("Connection Failed");
    exit();
}

?>