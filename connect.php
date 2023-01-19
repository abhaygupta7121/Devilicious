<?php
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      
      $subject = $_POST['subject'];

    //data base connection
      $conn = new mysqli('localhost','root','','login');
      if($conn->connect_error){
          die('Connection Failed : '.$conn->connect_error);
      }else{ 
        $stmt = $conn->prepare("insert into i1test(firstname,lastname,subject)
           values(?, ?,?)"); 
        $stmt ->bind_param("sss",$firstname,$lastname,$subject);
        $stmt->execute();
     echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
 }
?>

