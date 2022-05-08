<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register an account</h1>
    <?php
        if(!is_array($data)){
            echo $data; 
        }
    ?>
    <form action="" method="post">
        <input type="text" placeholder="Username"  name="username">
        <input type="password" placeholder="Password"  name="password">
        <input type="password"  placeholder="Confirm Password" name="password_confirm">
        <input type="submit" name="action" value="Register">
    </form>
    Already have an account? <a href="login.php">Login</a>
</body>
</html>