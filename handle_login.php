<?php
include "config.php";

if(isset($_POST["login"])){

    $userEmail=$_POST["emailAddress"];
    $userPassword=$_POST["password"];


    //compare
    $sql="SELECT * FROM `users` WHERE emailAddress = '$userEmail'";

    $result=mysqli_query($link,$sql);

    if($result){

        $data=mysqli_num_rows($result);

        if($data == 1){
            while($row=mysqli_fetch_array($result)){

                $id = $row['id'];
                $emailAddress= $row['emailAddress'];
                $password=$row['password'];

                //verify the password

                if(password_verify($userPassword,$password)){

                    session_start();
                    $_SESSION['Loggedin'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['username']=$emailAddress;

                    header("location:dashboard.php");



                }else{
                    echo "Passwords are not matching";
                }


            }


        }else{
            echo "No such email address found";
        }




    }




}