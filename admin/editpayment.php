<?php
$con = mysqli_connect('localhost','root','','gms');
$update=false;
$id='';
$name='';
$fprice='';
$plan='';
$payment='';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    echo $id;
    $update=true; 
    $sql="select * from payment where id='$id'";
    $result = mysqli_query($con, $sql);
    
        $row = mysqli_fetch_assoc($result);
        $id=$row['id'];
        $name=$row['name'];
        $fprice=$row['fprice'];
        $plan=$row['plan'];
        $payment=$row['payment'];
        header("Location: membership.php?id=".$id."&name=".$name."&fprice=".$fprice."&plan=".$plan.'&payment='.$payment);
    }
   
    
    
    ?>