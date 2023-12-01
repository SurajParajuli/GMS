

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawajyoti Fitness | Log In | Admin</title>

    <!--Tab Bar Icon-->
    <link rel="icon" href="../images/logo.png">

    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">

<body>
            <div class="content">
                <div class="flex-div">

                    <div class="name-content">
                        <div class="logo-col">
                          
                            <h1 class="brand">ADMIN LOGIN</h1>
                        </div>
                    
                   
                    </div>
                    
                    <form method="POST" action="login.php">
                        <input type="email" placeholder="Email" value="<?php if(isset($_COOKIE["email"])){echo $_COOKIE["email"];}?>" name="email" required />
                        <input type="password" placeholder="Password"  value="<?php if(isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password" required>
                        <input type="submit" value="Login" name="login" class="login-btn">
                        <!-- <button class="login">Log In</button> -->  <?php
                 session_start();
		if (isset($_SESSION['message'])){
            echo '<p style="color: red;">' . $_SESSION['message'] . '</p>';		}
		unset($_SESSION['message']);
	?>
                        <a href="forgotpass.php">Forgot Password ?</a>
                       
                        <!-- <button class="create-account">Create New Account</button> -->
                    </form>
                    
    
    
                </div>
                </div>

              
                






</body>
</html>


