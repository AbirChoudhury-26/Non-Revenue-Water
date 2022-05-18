<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $bill = $_GET['bill_id'];
    $name = $_GET['name'];
    $email = $_GET['email'];

    $servername = "localhost";
    $username  = "root" ;
    $password = "";
    $database = "consumer";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("sorry we failed to connect : ". mysqli_connect_error());
    }

    else{
        echo "connection was successfull<br>";

        $sql = " INSERT INTO `login` (`bill_id`, `name`, `email`) VALUES ( '$bill', '$name', '$email')";
        $result = mysqli_query($conn, $sql);
    }

    if($result){
        echo "your connection is successful your entry is feeded";
    }
    else{
        echo "connection was unsuccessfull sorry we failed";
    }
}


?>
