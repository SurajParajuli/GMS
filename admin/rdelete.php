<?php
$con = mysqli_connect('localhost','root','','gms');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="delete from payment where id='$id'";
        $result = mysqli_query($con, $sql);
        header("Location:report.php");
        
      
    }
    
    ?>