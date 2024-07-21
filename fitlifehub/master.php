<?php
   $UserName = $_GET['UserName'];
   $password = $_GET['password'];
   $Address  = $_GET['Address'];
   $PhoneNo  = $_GET['PhoneNo'];

   //database connection
   $conn =new mysqli('localhost','root','','fitlifehub');
   if($conn->connect_error){
    doe('Connection Failed :' .$conn->connect_error);
   }
   else{
    $stmt =$conn->prepare("insert into bookingappointment(UserName,password,Address,PhoneNo)
    values(?,?,?,?)");
    $stmt->bind_param("sssi", $UserName,$password,$Address,$PhoneNo);
    $stmt->execute();
    echo " booking succesfully...";
    $stmt->close();
    $conn->close();
   }
?>