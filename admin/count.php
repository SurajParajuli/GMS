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
    <style>
        .containers {
            display: flex;
            flex-direction: column;
            align-items: center;
            
            height: 100vh;
        }

        .count-field {
            width: 200px;
            height: 100px;
            background-color: #eaeaea;
            border: 1px solid #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            background: linear-gradient(45deg, #ff0000, #ff7575);
        }
    </style>





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
                <h1>Active</h1><br><br>
                <div class="main">
                <div class="containers">
        <h1>User </h1>
        <div class="count-field">
            <?php
            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gms";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query the database to get the user count
            $sql = "SELECT COUNT(*) as count FROM userlogin";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $count = $row['count'];
                echo "<span>$count</span>";
            } else {
                echo "0";
            }

            $conn->close();
            ?>
        </div>
        <h1>Trainer </h1>
        <div class="count-field">
        
            <?php
            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gms";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query the database to get the user count
            $sql = "SELECT COUNT(*) as count FROM trainer";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $count = $row['count'];
                echo "<span>$count</span>";
            } else {
                echo "0";
            }

            $conn->close();
            ?>
        </div>
        <h1>Membership </h1>
        <div class="count-field">
        
            <?php
            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gms";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query the database to get the user count
            $sql = "SELECT COUNT(*) as count FROM membership";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $count = $row['count'];
                echo "<span>$count</span>";
            } else {
                echo "0";
            }

            $conn->close();
            ?>
        </div>
    </div>
                </div>


        </div>


        </main>
        
        <script src="date.js"></script>

</html>