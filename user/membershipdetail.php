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

    <link rel="stylesheet" href="allcss.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="customer.css?v=<?php echo time(); ?>">





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
                <h1>Membership Detail</h1><br><br>



                <div class="recent-product">
                    <!-- displaying table for products -->
                    <table style="width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>plan</th>
                                <th>duration</th>
                                <th>membership_date</th>

                            </tr>
                        </thead>
                        <tbody style="text-align:center">

                            <?php


                            $con = mysqli_connect('localhost', 'root', '', 'gms');

                            if (!$con) {
                                die("Connection Error" . mysqli_connect_error());
                            }

                            $sql = "SELECT `id`, `name`, `age`, `contact`, `weight`, `plan`, `duration`, `membership_date` FROM `membership` where id='" . $_SESSION['id'] . "'";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($rows = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $rows["id"] . "</td>";
                                    echo "<td>" . $rows["name"] . "</td>";
                                    echo "<td>" . $rows["plan"] . "</td>";
                                    echo "<td>" . $rows["duration"] . "</td>";
                                    echo "<td>" . $rows["membership_date"] . "</td>";



                                }
                            }
                            $query = "SELECT duration, membership_date FROM membership WHERE id ='" . $_SESSION['id'] . "'";
                            $result = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($result);

                            $duration = $row['duration'];
                            $membership_date = $row['membership_date'];

                            // Calculate the membership end date
                            $end_date = date('Y-m-d', strtotime($membership_date . ' + ' . $duration . ' days'));

                            // Compare with the current date
                            $current_date = date('Y-m-d');

                            if ($current_date < $end_date) {
                                // Membership period is over
                                // Notify the user
                                echo '<p style="color: red;">' . "Your membership has expired" . '</p>';	
                            } else {
                                // Membership is still active
                                // Do something else
                                echo '<p style="color: red;">' . "Your membership is active" . '</p>';
                            }


                            ?>

                        
                            <td>
                                <tr>
                        </tbody>
                    </table>

                </div>


            </main>


            <!--- ============End Of Main============ -->


            <!-- preloader -->

</body>

</html>