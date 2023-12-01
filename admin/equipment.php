<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Redirect the user to the login page or display an access denied message
    header('Location:index.php');
    exit;
}

// Continue executing the rest of the file
// ...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawajyoti Fitness | ADMIN</title>

    <!--Tab Bar Icon-->


    <!-- CSS LINK-->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="query.css?v=<?php echo time(); ?>">
        
    <link rel="stylesheet" href="allcss.css?v=<?php echo time(); ?>">
   
    
    
   
</head>
<body onload="myFunction()"> 
    
    <div id='app'>
        <div class="container">
            <aside>
                <div class="top">
                <a href="home.php" id="logo">
                    <div class="logo">
                        <h2><span class="danger">Nawajyoti</span>  Fitness</h2>
                    </div>
                    </a>
                    
    
                    <div class="close" id="close-btn">
                        <span class="material-icons-sharp">close</span>    
                    </div>
                </div>
    
                <div class="sidebar" id="sidebar menu">

                    <a href="count.php" class="sidebar-menu" id="count">

                    <h3 style="padding-right:1.5rem">Active Users</h3>
                    </a>
                   
                    <a href="adduser.php" class="sidebar-menu" id="adduser">
                       
                        <h3 style="padding-right:1.5rem">Add User</h3>
                    </a>
    
                    <a href="addtrainer.php" class="sidebar-menu" id="addtrainer">
                       
                        <h3 style="padding-right:1.5rem">Add Trainer</h3>
                    </a>
    
            
                    <a href="membership.php" class="sidebar-menu" id="membership">
                       
                        <h3 style="padding-right:1.5rem">Membership</h3>
                        <!-- <span class="message-count">26</span> -->   
                    </a>
    
                    <a href="class.php" class="sidebar-menu" id="class">
                        
                        <h3 style="padding-right:1.5rem">Class Scheduling</h3>
                    </a>
    
                   

                    <a href="equipment.php" class="sidebar-menu" id="equpiment">
                       
                        <h3 style="padding-right:1.5rem">Equipment Maintenance</h3>
                    </a>
                    <a href="report.php" class="sidebar-menu" id="report">
                       
                       <h3 style="padding-right:1.5rem">Reports</h3>
                   </a>
                   
    
                    
        
                    <a href="logout.php" id="logout">
                        
                        <h3 style="padding-right:1.5rem">Log out</h3>
                    </a>
    
                    
                        
                </div>
            </aside>
    
            <!-- ======= MAIN SECTION  ==============-->
            <main id="change"> 
                <h1>Equipment</h1><br><br>
            <div class="content">
    <div class="main">
                <div class="recent-product">
        <!-- displaying table for products --><?php
                                                                                        
                                            
                                                $con = mysqli_connect('localhost','root','','gms');
                                                        
                                                if(!$con){
                                                    die("Connection Error".mysqli_connect_error());
                                                }
                                        $sql = "Select * from equipment ORDER BY Tdate DESC LIMIT 1";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_fetch_assoc($result);
                                              // Set the value of the form field
                                            
                                            
                                    ?>
        <form class="addOrder" method="POST" action="equipment_adder.php">
                                        
                                              <div class="row1">
                                                <div class="col1">
                                                    <b>Date</b>
                                                    <input type="date" id="date" name="Tdate"  value="<?php echo $Tdate; ?>">
                                                </div>   
                                            </div>       
                                            <div class="row2">
                                                <div class="col1">
                                                    <b>Exercise Bike</b>
                                                    <input type="text" id="Estatus" name="Estatus" placeholder="Status" value="<?php echo $row['exercise_bike'];?>">
                                                </div>   
                                                <div class="col2">
                                                    <b>Treadmills</b>
                                                    <input type="text" id="Tstatus" name="Tstatus" placeholder="Status" value="<?php echo $row['treadmills']; ?>">
                                                </div>  <div class="col3">
                                                    <b>Step Machines</b>
                                                    <input type="text" id="Sstatus" name="Sstatus" placeholder="Status" value="<?php echo$row['step_machines']; ?>">
                                                </div>                                           
                                            </div>
                                            
                                            
                                            <div class="row2">
                                            <div class="col1">
                                                    <b>Lat Pulldown</b>
                                                    <input type="text" id="Lstatus" name="Lstatus" placeholder="Status" value="<?php echo $row['lat_pulldown']; ?>">
                                                </div>   
                                                <div class="col2">
                                                    <b>Seated row </b>
                                                    <input type="text" id="Rstatus" name="Rstatus" placeholder="Status" value="<?php echo $row['seated_row']; ?>">
                                                </div>  <div class="col3">
                                                    <b>Cable Machine</b>
                                                    <input type="text" id="Cstatus" name="Cstatus" placeholder="Status" value="<?php echo $row['cable_machine']; ?>">
                                                </div>       
                                            </div>
                                          <br />
                                            <div class="row2">
                                            <div class="col1">
                                                    <b>LegExtension</b>
                                                    <input type="text" id="legstatus" name="legstatus" placeholder="Status" value="<?php echo $row['leg_extension']; ?>">
                                                </div>   
                                                <div class="col2">
                                                    <b>Smith Mac</b>
                                                    <input type="text" id="smithstatus" name="smithstatus" placeholder="Status" value="<?php echo $row['smith_mac']; ?>">
                                                </div>  <div class="col3">
                                                    <b>Angled leg Curl</b>
                                                    <input type="text" id="curlstatus" name="curlstatus" placeholder="Status" value="<?php echo $row['angled_leg_curl']; ?>">
                                                </div>   
                                            </div>     

                                            <div class="row2">
                                            <div class="col1">
                                                    <b>Incline Press</b>
                                                    <input type="text" id="Istatus" name="Istatus" placeholder="Status" value="<?php echo $row['incline_press']; ?>">
                                                </div>   
                                                <div class="col2">
                                                    <b>Pec-Deck</b>
                                                    <input type="text" id="Pstatus" name="Pstatus" placeholder="Status" value="<?php echo$row['ped_dec']; ?>">
                                                </div>  <div class="col3">
                                                    <b> Cable Cross-Over</b>
                                                    <input type="text" id="Ostatus" name="Ostatus" placeholder="Status" value="<?php echo $row['cable_cross_over']; ?>">
                                                </div>  
</div>

                                               


                                            <div class="row5">
                                                <div class="col1"></div>
                                                <div class="col2">
                                                    <input type="submit" value="SAVE">
                                                </div>
                                            </div>
                                           
                                          
                                        </form>
                                        
                  
                </div>
</div>

                  
                

</div>
   
            </main>
            
    
            <!--- ============End Of Main============ -->
    

   
  
    
</body>
</html>
    
 
