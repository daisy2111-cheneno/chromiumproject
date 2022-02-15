<?php
include "config.php";

if(isset($_POST["register"])){
    #define variables of the form
    $firstName= $_POST['firstName'];
    $secondName= $_POST['secondName'];
    $emailAddress= $_POST['emailAddress'];
    $password= $_POST['password'];
    $confirmPass= $_POST['confirmPass'];


    //validate

    if (strlen($password)<6){
        $passError="Password must have at least 6 characters";
        echo $passError;
    }else{
        //encrypted password
        $storePass = password_hash($password, PASSWORD_DEFAULT);
    }

    #confirm password
    if($confirmPass != $password){
        $conPassErr ="Passwords do not Match!";
        echo $conPassErr;
    }

    #create account if password and confirm password are empty
    if (empty($passError) and empty($conPassErr)){

        #insert your values
        $sql ="INSERT INTO `users`(`firstName`, `secondName`, `emailAddress`, `password`)
             VALUES ('$firstName','$secondName','$emailAddress','$storePass')";

        #query your data
        $result=mysqli_query($link,$sql);

        if($result){
            echo "You have been registered";
            header("location:login.php");
        }else{
            echo "Error executing query".mysqli_error($link);
        }

    }

    #close your link to stop hanging
    mysqli_close($link);






}