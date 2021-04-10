<?php

 include ('connection.php');
 
  if($con->connect_error){
              
echo "Connection failed: ". $con->connect_error;

           } else {

                
 
$email = $_POST["email"];
$password = $_POST["pass"];
 
 $sql = "select username, id from users where email = '$email' and password = '$password'";
 
 $result = mysqli_query($con,$sql);
 
 if(mysqli_num_rows($result)<0){
 
$status = "failed";
echo json_encode(array("response"=>$status));
 
 }
 else{
 
$row = mysqli_fetch_assoc($result);
$name = $row['username'];

$Id = $row['id'];
$status = "ok";

 echo json_encode(array("response"=>$status,"email"=>$email,"name"=>$name,"id"=>$Id));
 
 
 }
 
 mysqli_close($con);
 
 
           }

?>






