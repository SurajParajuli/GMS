<?php
// Connect to the database
$host = 'localhost';
$dbname = 'gms';
$username = 'root';
$password = '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Retrieve data from the database
  $stmt = $conn->query("SELECT * FROM equipment ORDER BY id DESC LIMIT 1");
  $row = $stmt->fetch();

  // Populate form fields
  $Estatus = $row['exercise_bike'];
  $Tstatus = $row['treadmills'];
  $Sstatus = $row['step_machines'];
  $Lstatus = $row['lat_pulldown'];
  $Rstatus = $row['seated_row'];
  $Cstatus = $row['cable_machine'];
  $legstatus = $row['leg_extension'];
  $smithstatus = $row['leg_extension'];
  $curlstatus = $row['angled_leg_curl'];
  $Istatus = $row['incline_press'];
  $Pstatus = $row['ped_dec'];
  $Ostatus = $row['cable_cross_over'];

  // Close the database connection
  $conn = null;
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>

<form class="addOrder" method="POST" action="save_dataequipment.php">
                                                    
                                            
                                            <div class="row2">
                                                <div class="col1">
                                                    <b>Exercise Bike</b>
                                                    <input type="text" id="Estatus" name="Estatus" placeholder="Status">
                                                </div>   
                                                <div class="col2">
                                                    <b>Treadmills</b>
                                                    <input type="text" id="Tstatus" name="Tstatus" placeholder="Status">
                                                </div>  <div class="col3">
                                                    <b>Step Machines</b>
                                                    <input type="text" id="Sstatus" name="Sstatus" placeholder="Status">
                                                </div>                                           
                                            </div>
                                            
                                            
                                            <div class="row2">
                                            <div class="col1">
                                                    <b>Lat Pulldown</b>
                                                    <input type="text" id="Lstatus" name="Lstatus" placeholder="Status">
                                                </div>   
                                                <div class="col2">
                                                    <b>Seated row </b>
                                                    <input type="text" id="Rstatus" name="Rstatus" placeholder="Status">
                                                </div>  <div class="col3">
                                                    <b>Cable Machine</b>
                                                    <input type="text" id="Cstatus" name="Cstatus" placeholder="Status">
                                                </div>       
                                            </div>

                                            
                                            <div class="row2">
                                            <div class="col1">
                                                    <b>LegExtension</b>
                                                    <input type="text" id="legstatus" name="legstatus" placeholder="Status">
                                                </div>   
                                                <div class="col2">
                                                    <b>Smith Mac</b>
                                                    <input type="text" id="smithstatus" name="smithstatus" placeholder="Status">
                                                </div>  <div class="col3">
                                                    <b>Angled leg Curl</b>
                                                    <input type="text" id="curlstatus" name="curlstatus" placeholder="Status">
                                                </div>   
                                            </div>     

                                            
                                            <div class="row2">
                                            <div class="col1">
                                                    <b>Incline Press</b>
                                                    <input type="text" id="Istatus" name="Istatus" placeholder="Status">
                                                </div>   
                                                <div class="col2">
                                                    <b>Pec-Deck</b>
                                                    <input type="text" id="Pstatus" name="Pstatus" placeholder="Status">
                                                </div>  <div class="col3">
                                                    <b> Cable Cross-Over</b>
                                                    <input type="text" id="Ostatus" name="Ostatus" placeholder="Status">
                                                </div>  
</div>

                                               


                                            <div class="row5">
                                                <div class="col1"></div>
                                                <div class="col2">
                                                    <input type="submit" value="ADD">
                                                </div>
                                            </div>
                                            
                                            
                                        </form>
                  
                
