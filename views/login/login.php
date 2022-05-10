<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
        if(!is_array($data)){
            echo $data; 
        }
    ?>
    <form action="" method="post">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <input type="submit" name="action" value="Login">
    </form>
    No account yet? <a href="register">Register</a>

</body>
</html>