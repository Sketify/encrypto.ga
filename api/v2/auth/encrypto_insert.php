
         <?php
            
                
                include ('connection1.php') ;
                
          if($con->connect_error){
              
echo "Connection failed: ". $con->connect_error;

           } else {

                
                if( empty($_POST['name']) && empty($_POST['email']) && empty($_POST['pass'])) {
               
                echo "Please enter all the Fields";
                
                } else {
                    
                      $name =$_POST['username'];
                      $email =$_POST['email'];
                      $pass =$_POST['pass'];
                
                   
                   $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$pass')";
                   
                if($con->query($sql))
                {
                    echo "Success";
                }
                else
                {
                    echo "Error :".$con->error ;
                }
                    
                }
                
                
           }
                
            
        
            
            
            
            
            
            
            
            ?>