


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
    <title>Nawajyoti Fitness| Last Mile Dilevery</title>

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
            <div class="head" style="gap:33.5rem">
                    <div class="head-title">
                    <h1>Dashboard</h1>
                    </div>

                    <div id="date" style="padding:0.7rem 1.8rem 0.2rem 1.8rem; border-radius:0.4rem; background-color:rgba(132, 139, 200, 0.18); ">
                        <div class="date-box">
                            <?php print date('M d, Y'); ?>
                        </div>
                    </div>
                </div>
                
    
               
              
    
                <div class="wallpaper">
                   
                <img src="trainer.png" alt="image">
                </div>
   
            </main>
            
    
            <!--- ============End Of Main============ -->
    

    <!-- preloader -->

    
</body>
</html>