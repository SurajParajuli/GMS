
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
    <title>Nawajyoti Fitenss | USER</title>

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

                    
                   
                <a href="membershipdetail.php" class="sidebar-menu" id="membershipdetail">
                       
                       <h3 style="padding-right:1.5rem">Membership Detail</h3>
                   </a>

                   <a href="exercise.php" class="sidebar-menu" id="exercise">
                      
                      <h3 style="padding-right:1.5rem"> Exercise</h3>
                  </a>
   
                   <a href="diet.php" class="sidebar-menu" id="diet">
                      
                       <h3 style="padding-right:1.5rem">Diet</h3>
                   </a>
   
           
                 
   
                   <a href="messagetrainer.php" class="sidebar-menu" id="messagetrainer">
                       
                       <h3 style="padding-right:1.5rem">Message Trainer</h3>
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
            <h1>Message Trainer</h1><br><br>
<div class="content">
    <div class="main">
                <div class="recent-product">
        <!-- displaying table for products -->
        <form class="addOrder" method="POST" action="message_sender.php">
                                            <div class="row1">
                                                <div class="col1">
                                                    <label for="ID"><b>Name</b></label>
                                                    <input type="text" id="id" name="id" placeholder="Id">
                                                </div>   
                                            </div>
                                            <br>
                                            <div class="row1">
                                                <div class="col1">
                                                    <label for="Message"><b>Message</b></label><br><br>
                                                    <textarea rows = "5" cols = "120" name = "message">
                                                        
                                                    </textarea><br>
                                                </div>   
                                            </div>
                                                   
                                                </div>
                                                <div class="col2">
                                                    <input type="submit" value="SEND">
                                                </div>
                                               
                                            </div>
                                            
                                        </form>
                  
                
                </div>
</div>
</div>
            </main>
            
    
            <!--- ============End Of Main============ -->
    

    <!-- preloader -->
   
    <script src="./index.js"></script>
</body>
</html>