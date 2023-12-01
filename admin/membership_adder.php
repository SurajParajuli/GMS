<?php

    $con = mysqli_connect('localhost','root','','gms');
                
    if(!$con){
        die("Connection Error".mysqli_connect_error());
    }

    $update=false;

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $update=true;
        $sql="select * from membership where id='$id'";
        $result = mysqli_query($con, $sql);
        
            $row = mysqli_fetch_assoc($result);
          
    }

    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $fprice=$_POST['fprice'];
        $plan=$_POST['plan'];
        $payment=$_POST['payment'];
        $timing=$_POST['timing'];

        $sql="update membership SET name='$name',fprice='$fprice',plan='$plan',payment='$payment',timing='$timing' where id='$id'";
        $result = mysqli_query($con, $sql);
    
        
      
        header("Location:membership.php");
    }else if(!empty($_POST)){
        $sql = "Insert INTO membership (id,name,age,contact,weight,fprice,plan,duration,timing,payment,membership_date)
            VALUES($_POST[id],
                    '$_POST[name]',
                    $_POST[age],
                    $_POST[contact],
                    $_POST[weight],
                    '$_POST[fprice]',
                    '$_POST[plan]',
                    '$_POST[duration]',
                    '$_POST[timing]',
                    '$_POST[payment]',
                    '$_POST[mDate]'
                    )";
                
        $result = mysqli_query($con,$sql);
        
        if($result){
        }else{
            echo "Failed inserting data".mysqli_error($con);
        } 
        header("Location: membership.php");                 
    }


    

    

    

    
?>