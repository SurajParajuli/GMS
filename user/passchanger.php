<?php
    
    $con = mysqli_connect('localhost','root','','gms');
            
    if(!$con){
        die("Connection Error".mysqli_connect_error());
    }
    
       
        
    

   
        if(isset($_POST['update'])){
            $hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
                $id=$_POST['id'];
              
                
                
            $sql="update userlogin SET password='$hash' where id='$id'";
            $result = mysqli_query($con, $sql);
            
                
              
                header("Location: updatepassword.php");
            }
       
        
    
    ?>


