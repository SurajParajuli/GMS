<?php

// Connect to the database
$host = 'localhost';
$dbname = 'gms';
$username = 'root';
$password = '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // Insert data into the database
  $stmt = $conn->prepare("INSERT INTO `equipment`(`exercise_bike`, `treadmills`, `step_machines`, `lat_pulldown`, `seated_row`, `cable_machine`, `leg_extension`, `smith_mac`,`angled_leg_curl`, `incline_press`, `ped_dec`, `cable_cross_over`)
  VALUES('$_POST[Estatus]',
          $_POST[Tstatus],
          $_POST[Sstatus],
          $_POST[Lstatus],
          '$_POST[Rstatus]',
          '$_POST[Cstatus]',
          '$_POST[legstatus]'
          '$_POST[smithstatus]'
          '$_POST[curlstatus]'
          '$_POST[Istatus]'
          '$_POST[Pstatus]'
          '$_POST[Ostatus]'
           )");


  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
header("Location: equipment.php");
?>
