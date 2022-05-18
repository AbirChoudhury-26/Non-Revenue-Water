<?php


if($_SERVER['REQUEST_METHOD']=='GET'){
   $email = $_GET['mail'];
   $text = $_GET['area'];


   $servername = 'localhost';
   $username = 'root';
   $password = '';
   $database = 'contact1';

   $conn = mysqli_connect($servername,$username,$password,$database);

   if(!$conn){
       die("soory we failed to connect". mysqli_connect_error());
   }
   else{

    echo "connection is successfull<br>";

    $sql = 'INSERT INTO `contact` (`email`, `text`) VALUES ('$email', '$text')';
    $result = mysqli_query($conn,$sql);
   }

   if($result){
       echo "your connection is succssesfull your enyry is feeded";

   }
   else {
       echo "sorry we failed to connect";
   }
}






?>