<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Redirect the user to the login page or display an access denied message
    header('Location:index.php');
    exit;
}

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
            <h1>Exercises</h1><br><br>
            <h2>RECENT LINKS</h2><br>
    
<div class="recent-product">
<style>
        a {
            font-size: 15px;
        }
    </style>
        <!-- displaying table for products -->
        <?php
    $pdo = new PDO('mysql:host=localhost;dbname=gms', 'root', '');
    $query = "SELECT * FROM files where id='".$_SESSION['id']."'";
    $statement = $pdo->prepare($query);
    $statement->execute();

    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['filename'];
            echo "<a href=\"download.php?filename=$filename\">Download-------------------------$filename</a><br><br>";
        }
    } else {
        echo 'No files found in the database.';
    }
    ?>
</body>
</html>

                 
                </div>
                
   
            </main>
            
    
            <!--- ============End Of Main============ -->
    

    <!-- preloader -->
    
</body>
</html>