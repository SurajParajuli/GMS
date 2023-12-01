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
                <h1>Membership</h1><br><br>
                <div class="content">
                    <div class="main">
                        <div class="recent-product">
                            <?php require_once 'membership_adder.php' ?>
                            <!-- displaying table for products -->
                            <form class="addOrder" method="POST" action="membership_adder.php">
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
                                        <label for="cName"><b>Name</b></label>
                                        <input type="text" id="name" name="name" placeholder="Name"
                                        value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>"required/>

                                    </div>
                                </div>

                                <div class="row2">
                                    <div class="col1">
                                    <?php if ($update == true): ?>
                                        
                                        <input type="hidden" id="age" name="age" placeholder="Age">
                                        <?php else: ?>
                                        <label for="age"><b>Age</b></label>
                                        <input type="number" id="age" name="age" placeholder="Age">
                                        <?php endif; ?>

                                    </div>
                                    <div class="col2">
                                    <?php if ($update == true): ?>
                                        
                                        <input type="hidden" id="contact" name="contact" placeholder="Contact">
                                        <?php else: ?>
                                            <label for="contact"><b>CONTACT</b></label>
                                        <input type="number" id="contact" name="contact" placeholder="Contact">
                                        <?php endif; ?>

                                    </div>
                                    <div class="col3">
                                    <?php if ($update == true): ?>
                                        <input type="hidden" id="weight" name="weight" placeholder="Weight">
                                        <?php else: ?>
                                            <label for="weight"><b>WEIGHT</b></label>
                                        <input type="number" id="weight" name="weight" placeholder="Weight">
                                        <?php endif; ?>
                                    </div>
                                    <div class="col3">
                                        <label for="full price"><b>FULL Price</b></label>
                                        <input type="text" id="fprice" name="fprice" placeholder="Full Price          Eg : 25000"
                                        value="<?php echo isset($_GET['fprice']) ? $_GET['fprice'] : ''; ?>"required/>
                                        
                                    </div>
                                </div>

                                <div class="row3">
                                    <div class="col1">
                                        <label for="plan"><b>Plan</b></label>
                                        <input type="text" id="plan" name="plan" placeholder="Eg : GOLD / SILVER / BRONZE"
                                        value="<?php echo isset($_GET['plan']) ? $_GET['plan'] : ''; ?>"required/>

                                    </div>
                                    <div class="col2">
                                    <?php if ($update == true): ?>
                                        <input type="hidden" id="duration" name="duration" placeholder="Eg : 12 Months">
                                        <?php else: ?>

                                        <label for="duration"><b>Duration</b></label>
                                        <input type="text" id="duration" name="duration" placeholder="Eg : 12 Months">
                                        <?php endif; ?>
                                    </div>
                                    <div class="col3">
                                                                          
                                        <label for="timing"><b>Timing</b></label>
                                        <input type="text" id="timing" name="timing" placeholder="Eg : 9:00"
                                        value="<?php echo isset($_GET['timing']) ? $_GET['timing'] : ''; ?>"required/>
                                        

                                    </div>
                                    <div class="col4">
                                    
                                        <label for="payment"><b>Payment</b></label>
                                        <input type="text" id="payment" name="payment" placeholder="Eg : 25000"
                                        value="<?php echo isset($_GET['payment']) ? $_GET['payment'] : ''; ?>"required/>
                                       

                                        
                                        

                                    </div>


                                </div>

                                <div class="row5">
                                    <div class="col2">
                                    <?php if ($update == true): ?>
                                        <input type="hidden" id="mDate" name="mDate" placeholder="Membership Date"
                                            min="yyyy-MM">
                                            <?php else: ?>
                                        <label for="mDate"><b>Membership Date</b></label>
                                        <input type="date" id="mDate" name="mDate" placeholder="Membership Date"
                                            min="yyyy-MM">
                                            <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row6">

                                    <div class="col1"></div>
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
                    </div><br>
                    <h1>Detail</h1><br>

                    <div>
                        <table style="width: 100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Weight</th>
                                    <th>Contact</th>
                                    <th>Plan</th>
                                    <th>Duration</th>
                                    <th>Timing </th>
                                    <th>Membership </th>
                                    <th>Action</th>
                                    </th>

                                </tr>
                            </thead>
                            <tbody style="text-align:center">

                                <?php


                                $con = mysqli_connect('localhost', 'root', '', 'gms');

                                if (!$con) {
                                    die("Connection Error" . mysqli_connect_error());
                                }

                                $sql = "SELECT * from membership";
                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($rows = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $rows["id"] . "</td>";
                                        echo "<td>" . $rows["name"] . "</td>";
                                        echo "<td>" . $rows["age"] . "</td>";
                                        echo "<td>" . $rows["weight"] . "</td>";
                                        echo "<td>" . $rows["contact"] . "</td>";
                                        echo "<td>" . $rows["plan"] . "</td>";
                                        echo "<td>" . $rows["duration"] . "</td>";
                                        echo "<td>" . $rows["timing"] . "</td>";
                                        echo "<td>" . $rows["membership_date"] . "</td>";

                                        echo "<td style='display:flex; flex-direction:row;'>
                        
                   
                    
                           
                        
                   
                    
                            <a href='editmembership.php?id=$rows[id]' class='button' style='margin-right: 10px;'>
                            <span class='material-icons-sharp edit-btn' >Edit<br></span>
                            </a>
    
    
                          ";








                                    }
                                }
                                ?>
                                <td>
                                    <tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </main>


            <!--- ============End Of Main============ -->


            <!-- preloader -->

            <script src="date2.js"></script>
</body>

</html>