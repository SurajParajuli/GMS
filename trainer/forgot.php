<?php
    
    $con = mysqli_connect('localhost','root','','gms');
            
    if(!$con){
        die("Connection Error".mysqli_connect_error());
    }

        if(isset($_POST['update'])){
                $contact=$_POST['contact'];
                
                $hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
              
                
                
            $sql="update trainer SET password='$hash' where contact='$contact'";
            $result = mysqli_query($con, $sql);
            
                
              
                header("Location: index.php");
            }
       
        
    
    ?>
 