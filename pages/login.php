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
            <form action="../function/login_process.php" method="POST">
            <h1>Login</h1>
            <hr>
                <p>Animal Healthcare</p>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Username" required>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
            </form>    
        </div> 
            <div class="right"><img src="../images/dokterhewan.png" alt=""></div>
   </div>
</body>
</html>

