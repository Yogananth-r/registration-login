<?php


$server ="localhost";
$dbusername="root";
$dbpassword="";
$db="task";
$conn = mysqli_connect($server,$dbusername,$dbpassword,$db);


if (isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $contactno=$_POST['contactno'];
    $country=$_POST['country'];
    //echo $email;
    //header('Location: ./profile.html');
    registersql();
    //registermongo();
    //exit("regitered".$email."=".$password);
}



function registersql(){
    global $conn;
    $email =  $_POST['email'];
    $password= $_POST['password'];

    $checkuser= mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'  ");

    if(mysqli_num_rows($checkuser)>0){
        echo "Email already exists";
        exit;
    }

    $query = "INSERT INTO users VALUES('','$email','$password')";
    mysqli_query($conn, $query);
    echo "Registered";
}

function registermongo(){
    
    //$serverApi = new ServerApi(ServerApi::V1);
    $client = new MongoDB\Driver\Manager(
        'mongodb+srv://:<>@cluster0.tqrfrfa.mongodb.net/?retryWrites=true&w=majority');

    $db = $client->test;
    $dbcol= $db->task->users;
    $insert = array(
    name -> $_POST['name'],
    email -> $_POST['email'],
    password -> $_POST['password'],
    age-> $_POST['age'],
    dob-> $_POST['dob'],
    contactno-> $_POST['contactno'],
    country-> $_POST['country'] 
    );
    if($dbcol->insert($insert)){
        echo "sent to mongo";
    }
    else{
        echo "some issue";
    }

}



?>