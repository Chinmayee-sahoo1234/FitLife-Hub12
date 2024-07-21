<?php
   $name = $_GET['name'];
   $email = $_GET['email'];
   $comments  = $_GET['comments'];

   //database connection
   $conn =new mysqli('localhost','root','','fitlifehub');
   if($conn->connect_error){
    doe('Connection Failed :' .$conn->connect_error);
   }
   else{
    $stmt =$conn->prepare("insert into feedback(name,email,comments)
    values(?,?,?)");
    $stmt->bind_param("sss", $name,$email,$comments);
    $stmt->execute();
    echo " feedback succesfully...";
    $stmt->close();
    $conn->close();
   }
?>