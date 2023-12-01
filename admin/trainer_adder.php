<?php
    
        $con = mysqli_connect('localhost','root','','gms');
                
        if(!$con){
            die("Connection Error".mysqli_connect_error());
        }
        $update=false;

        if(!empty($_POST)){
            $hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $sql = "Insert INTO trainer(id,email, name, password, contact)
                VALUES($_POST[id],
                        '$_POST[email]',
                        '$_POST[name]',
                        '$hash',
                        '$_POST[contact]')";
                
        $result = mysqli_query($con,$sql);
        
        if($result){
        }else{
            echo "Failed inserting data".mysqli_error($con);
        } header("Location: addTrainer.php");
                  
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
                $contact=$_POST['contact'];
                
            $sql="update trainer SET email='$email',name='$name',password='$password',contact='$contact' where id='$id'";
            $result = mysqli_query($con, $sql);
            
                
              
                header("Location: addtrainer.php");
            }
?>
   