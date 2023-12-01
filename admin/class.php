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
                <h1>Class Detail</h1><br><br>
            <div class="content">
    <div class="main">
                <div class="recent-product">
                    <h2>Morning (9:00)</h2>
        <!-- displaying table for products -->
        <table style="width: 100%">
                <thead>
                    <tr>
                    <th>ID</th>
                        <th>Name</th>
                        <th> Plan</th> 
                        <th>Contact</th>
                        <th>Timing</th>
                        
                        
                    </tr>
                </thead>
                <tbody style="text-align:center">
                
                <?php
                

                $con = mysqli_connect('localhost','root','','gms');
            
                if(!$con){
                    die("Connection Error".mysqli_connect_error());
                }     
   
                            $sql = "SELECT * from membership where timing='9:00'";
                            $result = mysqli_query($con, $sql);
                            if(mysqli_num_rows($result)>0){
                            while($rows=mysqli_fetch_assoc($result)){
                            echo"<tr>";
                            echo"<td>".$rows["id"]."</td>";
                            echo"<td>".$rows["name"]."</td>";
                            echo"<td>".$rows["plan"]."</td>";
                            echo"<td>".$rows["contact"]."</td>";
                            echo"<td>".$rows["timing"]."</td>";
                         

                           
                               }
                        }
                    
                            ?>
                            
            
                <tr>
                </tbody>
            </table>
            <br><br>
            <h2>Day (2:00)</h2>
        <!-- displaying table for products -->
        <table style="width: 100%">
                <thead>
                    <tr>
                    <th>ID</th>
                        <th>Name</th>
                        <th> Plan</th> 
                        <th>Contact</th>
                        <th>Timing</th>
                        
                        
                    </tr>
                </thead>
                <tbody style="text-align:center">
                
                <?php
                

                $con = mysqli_connect('localhost','root','','gms');
            
                if(!$con){
                    die("Connection Error".mysqli_connect_error());
                }     
   
                            $sql = "SELECT * from membership where timing='2:00'";
                            $result = mysqli_query($con, $sql);
                            if(mysqli_num_rows($result)>0){
                            while($rows=mysqli_fetch_assoc($result)){
                            echo"<tr>";
                            echo"<td>".$rows["id"]."</td>";

                            echo"<td>".$rows["name"]."</td>";
                            echo"<td>".$rows["plan"]."</td>";
                            echo"<td>".$rows["contact"]."</td>";
                            echo"<td>".$rows["timing"]."</td>";
                         

                            
                               }
                        }
                    
                            ?>
                            
            
                <tr>
                </tbody>
            </table><br><br>
            <h2>Evening (6:00)</h2>
        <!-- displaying table for products -->
        <table style="width: 100%">
                <thead>
                    <tr>
                    <th>id</th>
                        <th>Name</th>
                        <th> Plan</th> 
                        <th>Contact</th>
                        <th>Timing</th>
                        
                        
                    </tr>
                </thead>
                <tbody style="text-align:center">
                
                <?php
                

                $con = mysqli_connect('localhost','root','','gms');
            
                if(!$con){
                    die("Connection Error".mysqli_connect_error());
                }     
   
                            $sql = "SELECT * from membership where timing='6:00'";
                            $result = mysqli_query($con, $sql);
                            if(mysqli_num_rows($result)>0){
                            while($rows=mysqli_fetch_assoc($result)){
                            echo"<tr>";
                            echo"<td>".$rows["id"]."</td>";

                            echo"<td>".$rows["name"]."</td>";
                            echo"<td>".$rows["plan"]."</td>";
                            echo"<td>".$rows["contact"]."</td>";
                            echo"<td>".$rows["timing"]."</td>";
                         

                            
                               }
                        }
                    
                            ?>
                            
            
                <tr>
                </tbody>
            </table>
                  
                
                </div>
</div>
</div>
   
            </main>
            
    
            <!--- ============End Of Main============ -->
    

    <!-- preloader -->
    <script>
        var preloader = document.getElementById('loading');
         
        function myFunction(){
            setTimeout(() => {
                preloader.style.display="none";
            }, 0);  
        } 

    </script>
    <script src="./index.js"></script>
</body>
</html>
    
 
