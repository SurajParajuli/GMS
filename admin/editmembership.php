<?php
$con = mysqli_connect('localhost','root','','gms');
$update=false;
$id='';
$name='';
$fprice='';
$plan='';
$payment='';
$timing='';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    echo $id;
    $update=true; 
    $sql="select id,name,fprice,plan,payment from membership where id='$id'";
    $result = mysqli_query($con, $sql);
    
        $row = mysqli_fetch_assoc($result);
        $id=$row['id'];
       
        $name=$row['name'];
        $fprice=$row['fprice'];
        $plan=$row['plan'];
        $payment=$row['payment'];
        $timing=$row['timing'];
        header("Location: membership.php?id=".$id."&email=".$email."&name=".$name."&fprice=".$fprice."&plan=".$plan."&payment=".$payment."&timing=".$timing);
    }
    
    
    ?>