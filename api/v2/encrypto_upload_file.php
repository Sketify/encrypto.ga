<?php

header("Access-Control-Allow-Origin: *");

include ('connection1.php');

if ($con->connect_error) {
  echo "Error: Connection failed: " . $con->connect_error;
} else {


//This folder will contain your all uploaded files
$target_path = "user_files/";


$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 


$target_path;

$siteurl = 'http://encrypto.000webhostapp.com/';

$fileurl = $siteurl.$target_path;

$file_path = $target_path;


if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    $filename = basename( $_FILES['uploadedfile']['name']);
    
    //This will add the filename into the DB
    $sql = "INSERT INTO files (filename,filepath,fileurl) VALUES ('$filename' ,'$taget_path', '$fileurl')";
    
    if ($con->query($sql) === TRUE) {
        
    echo "Success!";
       echo $fileurl;
       
    
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
} else{
    echo "Error!";
}
}


?>
