

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
    <title>Nawajyoti Fitness | TRAINER</title>

    <!--Tab Bar Icon-->
    <link rel="icon" href="../images/logo.png">


    <!-- CSS LINK-->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="query.css?v=<?php echo time(); ?>">
        
    <link rel="stylesheet" href="allcss.css?v=<?php echo time(); ?>">    <link rel="stylesheet" href="customer.css?v=<?php echo time(); ?>">    

   
    
    
   
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

                    
                   
                <a href="class.php" class="sidebar-menu" id="class">
                       
                       <h3 style="padding-right:1.5rem">Class Detail</h3>
                   </a>

                   <a href="exercise.php" class="sidebar-menu" id="exercise">
                      
                      <h3 style="padding-right:1.5rem"> Exercise</h3>
                  </a>
   
                   <a href="diet.php" class="sidebar-menu" id="diet">
                      
                       <h3 style="padding-right:1.5rem">Diet</h3>
                   </a>
   
           
                 
   
                   <a href="message.php" class="sidebar-menu" id="message">
                       
                       <h3 style="padding-right:1.5rem">Message</h3>
                   </a>

                   <a href="updatepassword.php" class="sidebar-menu" id="updatepassword">
                       
                       <h3 style="padding-right:1.5rem">Change Password</h3>
                   </a>
    
                   

                   
                    
        
                    <a href="logout.php" id="logout">
                        
                        <h3 style="padding-right:1.5rem">Log out</h3>
                    </a>
    
                    
                        
                </div>
            </aside>
    
            <!-- ======= MAIN SECTION  ==============-->
            <main id="change"> 
            <h1>Message </h1><br><br>
<div class="content">
    <div class="main">
                <div class="recent-product">
        <!-- displaying table for products -->
        
                  
                
                </div>
</div>
<br>


        <div>
            <table style="width: 130%">
                <thead>
                    <tr>
                    
                        
                        <th> ID</th> 
                        <th>Message</th>
                        <th>Action</th>
                        
                        
                        
                    </tr>
                </thead>
                <tbody style="text-align:center">
                
                <?php
                

                $con = mysqli_connect('localhost','root','','gms');
            
                if(!$con){
                    die("Connection Error".mysqli_connect_error());
                }     
   
                            $sql = "SELECT * from messagetrainer";
                            $result = mysqli_query($con, $sql);
                            if(mysqli_num_rows($result)>0){
                            while($rows=mysqli_fetch_assoc($result)){
                            echo"<tr>";
                            
                            echo"<td>".$rows["id"]."</td>";
                            echo"<td>".$rows["message"]."</td>";
                            echo "<td style='display:flex; flex-direction:row;'>

    
                            <a href='deletemessage.php?id=$rows[id]' class='button'>
                            <span class='material-icons-sharp del-btn' >Completed</span>
                            </a>";
                            
                            
                   
                    
                      
                    }   
                }            
            ?>
                <td><tr>
                </tbody>
            </table>

        </div>
</div>
   
            </main>
            
    
            <!--- ============End Of Main============ -->
    

    <!-- preloader -->
    
</body>
</html>