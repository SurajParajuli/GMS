<?php
    
    $con = mysqli_connect('localhost','root','','gms');
            
    if(!$con){
        die("Connection Error".mysqli_connect_error());
    }

        if(isset($_POST['update'])){
                $email=$_POST['email'];
                
                $hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
              
                
                
            $sql="update userlogin SET password='$hash' where email='$email'";
            $result = mysqli_query($con, $sql);
            
                
              
                header("Location: index.php");
            }
       
        
    
    ?>
 