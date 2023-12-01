<!-- php code to check email and password -->
<?php
    $conn = mysqli_connect("localhost","root","","gms");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
?>