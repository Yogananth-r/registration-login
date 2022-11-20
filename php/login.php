<?php

if (isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    //echo $email;
    //header('Location: ./profile.html');
    exit("work".$email."=".$password);
}



?>