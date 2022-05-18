<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $phone = $_POST['number'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['fpassword'];
    $cpassword = $_POST['con-password'];
    $meter = $_POST['m'];
    $meterno = $_POST['mno'];
    $houseno = $_POST['hno'];
    $udp = $_POST['udp'];
    $wardno = $_POST['wno'];

    $bill_id = $meter."".$meterno."-".$houseno."-".$udp."-".$wardno;
    $fullname = $firstname." ".$lastname;
    

    $servername = "localhost";
    $username  = "root" ;
    $password = "";
    $database = "register";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("sorry we failed to connect : ". mysqli_connect_error());
    }

    else{

        $sql = "INSERT INTO `registration` (`first-name`, `last-name`, `phone`, `gender`, `email`, `password`, `con-password`, `bill_id`) VALUES ('$firstname', '$lastname', '$phone', '$gender', '$email', '$password', '$cpassword' , '$bill_id')";
        $result = mysqli_query($conn, $sql);

       
    }

    if($result){
        echo "BILL_ID = $bill_id  NAME = $fullname";
    }
    else{
        echo "connection was unsuccessfull sorry we failed";
    }


}




?>