<?php

$link=mysqli_connect('localhost','root','','chromium');

if($link==false){
    die("Error connect to serve".mysqli_connect_error($link));
}