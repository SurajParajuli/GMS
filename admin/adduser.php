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
                            <h2><span class="danger">Nawajyoti</span> Fitness</h2>
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
                <h1>User</h1><br><br>
                <div class="content">


                    <div class="main">
                        <div class="recent-product">
                            <?php require_once 'user_adder.php' ?>
                            <!-- displaying table for products -->

                            <form class="addOrder" method="POST" action="user_adder.php">
                                <div class="row1">
                                    <div class="col1">
                                        <?php if ($update == true): ?>
                                            <input type="hidden" id="id" name="id" placeholder="Id"
                                                value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>"required/>
                                        <?php else: ?>
                                            <label for="id"><b>Id</b></label>
                                            <input type="text" id="id" name="id" placeholder="Id"
                                                value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>"required/>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col2">
                                        <label for="email"><b>Email</b></label>
                                        <input type="text" id="email" name="email" placeholder="Email"
                                            value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>"required/>
                                    </div>
                                </div>

                                <div class="row2">
                                    <div class="col1">
                                        <label for="cName"><b>Name</b></label>
                                        <input type="text" id="name" name="name" placeholder="Name"
                                            value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>"required/>
                                    </div>
                                    <div class="col2">
                                    <?php if ($update == true): ?>
                                        <input type="hidden" id="name" name="password" placeholder="Password"required/>
                                        <?php else: ?>   
                                        <label for="cName"><b>Password</b></label>
                                        <input type="text" id="name" name="password" placeholder="Password"required/>
                                        <?php endif; ?> 
                                    </div>
                                    <div class="col3">
                                        <?php if ($update == true): ?>
                                            <input type="hidden" id="dDate" name="Date"
                                                value="<?php echo isset($_GET['startdate']) ? $_GET['startdate'] : ''; ?>"required/>
                                        <?php else: ?>
                                            <label for="dDate"><b>Start Date</b></label>
                                            <input type="date" id="dDate" name="Date"
                                                value="<?php echo isset($_GET['startdate']) ? $_GET['startdate'] : ''; ?>"required/>
                                        <?php endif; ?>

                                    </div>
                                </div>







                                <div class="row6">
                                    <div class="col1">

                                    </div>
                                    <div class="col2">
                                        <?php if ($update == true): ?>
                                            <input type="submit" name="update" value="Update">
                                        <?php else: ?>
                                            <input type="submit" value="ADD">
                                        <?php endif; ?>
                                    </div>

                                </div>


                            </form>
                        </div>
                    </div>




                    <div>


                    </div><br>
                    <!-- Jesh: Label CSS Change -->
                    <!-- displaying table for products -->
                    <h1>Detail</h1><br>
                    <div>
                        <table style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Email</th>
                                    <th> Name</th>
                                    
                                    <th>Start Date</th>

                                    <th style="width:10%;" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center">

                                <?php


                                $con = mysqli_connect('localhost', 'root', '', 'gms');

                                if (!$con) {
                                    die("Connection Error" . mysqli_connect_error());
                                }

                                $sql = "SELECT id,email,name,startdate from userlogin";
                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($rows = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $rows["id"] . "</td>";
                                        echo "<td>" . $rows["email"] . "</td>";
                                        echo "<td>" . $rows["name"] . "</td>";
                                        
                                        echo "<td>" . $rows["startdate"] . "</td>";

                                        echo "<td style='display:flex; flex-direction:row;'>
                        
                   
                    
                           
                        
                   
                    
                            <a href='edituser.php?id=$rows[id]' class='button' style='margin-right: 10px;'>
                            <span class='material-icons-sharp edit-btn' >Edit<br></span>
                            </a>
    
    
                            <a href='deleteuser.php?id=$rows[id]' class='button'>
                            <span class='material-icons-sharp del-btn' >Delete</span>
                            </a>";

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
        <script src="date.js"></script>

</html>