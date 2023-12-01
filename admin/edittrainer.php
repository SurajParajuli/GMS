<?php
$con = mysqli_connect('localhost','root','','gms');
$update=false;
$id='';
$email='';
$name='';
$password='';
$contact='';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    echo $id;
    $update=true; 
    $sql="select * from trainer where id='$id'";
    $result = mysqli_query($con, $sql);
    
        $row = mysqli_fetch_assoc($result);
        $id=$row['id'];
        $email=$row['email'];
        $name=$row['name'];
        $password=$row['password'];
        $contact=$row['contact'];
        header("Location: addtrainer.php?id=".$id."&email=".$email."&name=".$name."&password=".$password.'&contact='.$contact);
    }
    
    
    ?>