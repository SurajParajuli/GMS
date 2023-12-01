<?php
    if(!empty($_POST)){
        $con = mysqli_connect('localhost','root','','gms');
                
        if(!$con){
            die("Connection Error".mysqli_connect_error());
        }
        $sql = "Insert INTO messagetrainer (id,message)
                VALUES('$_POST[id]',
                        '$_POST[message]'
                        
                        )";
                
        $result = mysqli_query($con,$sql);
        
        if($result){
        }else{
            echo "Failed inserting data".mysqli_error($con);
        }                  
    }

    header("Location: messagetrainer.php");
?>