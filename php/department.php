<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $dis = $_GET['Distributor'];
    $num = $_GET['disnum'];
  

    $servername = "localhost";
    $username  = "root" ;
    $password = "";
    $database = "distributor3";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("sorry we failed to connect : ". mysqli_connect_error());
    }

    else{
        echo "connection was successfull<br>";

        $sql = " INSERT INTO `login` (`name`, `mobile no.`) VALUES ('$dis', '$num');";
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
