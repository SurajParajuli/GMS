<?php
    
    $con = mysqli_connect('localhost','root','','gms');
            
    if(!$con){
        die("Connection Error".mysqli_connect_error());
    }

        if(isset($_POST['update'])){
                $id=$_POST['id'];
                $phone=$_POST['phone'];
                $password=$_POST['password'];
              
                
                
            $sql="update adminlogin SET password='$password' where id=$id AND Phone='$phone'";
            $result = mysqli_query($con, $sql);
            
                
              
                header("Location: index.php");
            }
       
        
    
    ?>
 