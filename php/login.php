<?php

// $echo "hi";

// if(isset($_POST["action"])){
//     if($_POST["action"]=="login"){
//         login();
//     }
// }


// function login(){
//     //global $conn
//     $email=$_POST["email"];
//     $passqord=$_POST["password"];


//     $user=mysqli_query($conn, "SELECT * FROM usertb WHERE email ='$email'");
    
//     if(mysqli_num_rows($user)>0){
//             $row= mysqli_fetch_assoc($user);
//             if($password==$row["password"]){
//                 echo"Login successful";
//                 $_SESSION["login"]=true;
//                 $_SESSION["email"]=$row["email"]
//             }
//             else{
//                 echo "Wrong Password"
//                 exit;
//             }
//     }
//     else{
//         echo "User Not Registered";
//         exit;
//     }

// }



if (isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    //echo $email;
    //header('Location: ./profile.html');

    exit("wok".$email."=".$password);
}



?>