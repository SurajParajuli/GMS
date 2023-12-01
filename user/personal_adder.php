<?php
    if(!empty($_POST)){
        $con = mysqli_connect('localhost','root','','gms');
                
        if(!$con){
            die("Connection Error".mysqli_connect_error());
        }
        $sql = "Insert INTO membership (name,age,contact,weight,plan,duration,membership_date)
                VALUES('$_POST[name]',
                        '$_POST[age]',
                        '$_POST[contact]',
                        '$_POST[weight]'
                        '$_POST[plan]'
                        '$_POST[duration]'
                        '$_POST[mDate]'
                        )";
                
        $result = mysqli_query($con,$sql);
        
        if($result){
        }else{
            echo "Failed inserting data".mysqli_error($con);
        }                  
    }

    header("Location: personaldetail.php");
?>