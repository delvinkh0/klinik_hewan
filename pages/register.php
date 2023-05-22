<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../style/login.css">
</head>

<body>
   <div class="container">
        <div class="login">
            <form action="../function/register_process.php" method="POST">
            <h1>Register</h1>
            <hr>
                <p>Animal Healthcare</p>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Username" required>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
                <?php if (isset($_GET['err'])) { ?>
                    <p class="error_msg"><?php echo $_GET['err']; ?></p>
                <?php } ?>
                <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
            </form>    
        </div> 
            <div class="right"><img src="../images/register.png" alt=""></div>
   </div>
</body>
</html>