<?php
    
    $con = mysqli_connect('localhost','root','','gms');
            
    if(!$con){
        die("Connection Error".mysqli_connect_error());
    }
    $update=false;
       
        
    if(!empty($_POST)){
         $hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $sql = "Insert INTO userlogin(id,email, name, password, startdate)
                VALUES($_POST[id],
                        '$_POST[email]',
                        '$_POST[name]',
                        '$hash',
                        '$_POST[Date]')";
                
        $result = mysqli_query($con,$sql);
        
        if($result){
        }else{
            echo "Failed inserting data".mysqli_error($con);
        }    header("Location: adduser.php");
                  
    }

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $update=true;
        $sql="select * from userlogin where id='$id'";
        $result = mysqli_query($con, $sql);
        
            $row = mysqli_fetch_assoc($result);
          
        }
        if(isset($_POST['update'])){
                $id=$_POST['id'];
                $email=$_POST['email'];
                $name=$_POST['name'];
                $password=$_POST['password'];
                
            $sql="update userlogin SET email='$email',name='$name',password='$password' where id='$id'";
            $result = mysqli_query($con, $sql);
            
                
              
                header("Location: adduser.php");
            }
       
        
    
    ?>


