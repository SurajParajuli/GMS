





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RG Fitenss | USER</title>

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
                    <a href="index.php" id="logo">
                    <div class="logo">
                        
                        <h2><span class="danger">RG</span>  Fitness</h2>
                        
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
    
            
                    <a href="personaldetail.php" class="sidebar-menu" id="personaldetail">
                       
                        <h3 style="padding-right:1.5rem">Personal detail</h3>
                        <!-- <span class="message-count">26</span> -->   
                    </a>
    
                    <a href="messagetrainer.php" class="sidebar-menu" id="messagetrainer">
                        
                        <h3 style="padding-right:1.5rem">Message Trainer</h3>
                    </a>
    
                   

                   
                    
        
                    <a href="logout.php" id="logout">
                        
                        <h3 style="padding-right:1.5rem">Log out</h3>
                    </a>
    
                    
                        
                </div>
            </aside>
    
            <!-- ======= MAIN SECTION  ==============-->
            <main id="change"> 
            
<h1>Personal Detail</h1><br><br>
    
    <div class="content">
        <div class="main">
                    <div class="recent-product">
            <!-- displaying table for products -->
            <form class="addOrder" method="POST" action="<?php $_SERVER['PHP_SELF']?>">
                                                <div class="row1">
                                                    <div class="col1">
                                                        <label for="cName"><b>Email</b></label>
                                                        <input type="text" id="email" name="email" placeholder="Email">
                                                    </div>   
                                                </div>
    
                                                <div class="row2">
                                                    <div class="col1">
                                                         <label for="cName"><b>Name</b></label>
                                                        <input type="text" id="name" name="name" placeholder="Name"> 
                                                </div>
                                                <div class="col2">
                                                         <label for="cName"><b>Password</b></label>
                                                        <input type="text" id="name" name="name" placeholder="Password"> 
                                                </div>
                                                </div>
                                                
                                                
    
                                                
                                                
                                                
                                                <div class="row5">
                                                <div class="col2">
                                                        <label for="dDate"><b>Start Date</b></label>
                                                        <input type="date" id="dDate" name="dDate" placeholder="Start Date">
                                                    </div>
                                                </div>
                                                <div class="row6">
                                                    <div class="col1">
                                                       
                                                    </div>
                                                    <div class="col2">
                                                        <input type="submit" value="ADD">
                                                    </div>
                                                   
                                                </div>
                                                
                                            </form>
                      
                    
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