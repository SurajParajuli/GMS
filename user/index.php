

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawajyoti Fitness | Log In | User</title>

    <!--Tab Bar Icon-->
    <link rel="icon" href="../images/logo.png">

    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">

<body>
            <div class="content">
                <div class="flex-div">

                    <div class="name-content">
                        <div class="logo-col">
                          
                            <h1 class="brand">USER LOGIN</h1>
                        </div>
                    
                   
                    </div>
                    
                    <form method="POST" action="login.php"><br />
                        <input type="id" placeholder="User Id" value="<?php if(isset($_COOKIE["id"])){echo $_COOKIE["id"];}?>" name="id" required />
                        <input type="password" placeholder="Password"  value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>" name="password" required>
                        <label><input type="checkbox" name="remember"  <?php if(isset($_COOKIE["id"]) && isset($_COOKIE["password"])){echo "checked";}?>>Remember me</label>
                        <input type='hidden' value='user' name='type' />
                        <input type="submit" value="Login" name="login" class="login-btn">
                       <?php
                 session_start();
		if (isset($_SESSION['message'])){
            echo '<p style="color: red;">' . $_SESSION['message'] . '</p>';		}
		unset($_SESSION['message']);
	?>
                        <!-- <button class="login">Log In</button> -->
                         <a style="position: relative; top: -50px;" href="forgotpass.php">Forgot Password ?</a>

                        <!-- <button class="create-account">Create New Account</button> -->
                    </form>
                </div>
                </div>


                
<span>
	<!--php-->
</span>





</body>
</html>


