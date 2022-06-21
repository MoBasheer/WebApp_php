<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        <?php include 'views/templates/style.css'; ?>
    </style>
    <title>Login</title>
</head>

<body class="login_body">
    <?php
    //Create csrf token using "uniqid_func" to generate a unique & random token
    // $token = md5(uniqid(rand(), true));
    $token = bin2hex(uniqid(openssl_random_pseudo_bytes(16), true));
    $_SESSION['csrf_token'] = $token;
    ?>
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center ">
            <div class="login_col col-sm-2 col-md-6 col-lg-4 rounded p-4 shadow">
                <div class="row justify-content-center mb-4">
                    <img class="logo" src="https://scontent-ams2-1.xx.fbcdn.net/v/t39.30808-6/262430885_109045001614891_2890011228913943444_n.png?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=pRoqFsqASuYAX-Vf1GG&_nc_oc=AQnV3otbrH_JvhegLReYQeBAteGzN9WlN1VoLFXf4O9foyLDGKkzkby3b9GOr_Wr-pM&_nc_ht=scontent-ams2-1.xx&oh=00_AT_HQC5dAbzCFRI9qeEaIXKpFeH7ncnxGooiKfFRXk14EA&oe=62B45B1A" alt="De IJver Rijschool Logo">
                </div>
                <h1 class="mb-4 text-center">Welkom, log hier in!</h1>
                <form action="" method="post">
                    <div>
                        <input type="hidden" name="csrf_token" value="<?php echo $token ?>">
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="username" placeholder="Gebruikersnaam" class="form-control">
                        <label for="floatingInput">Gebruikersnaam</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" placeholder="Wachtwoord" class="form-control">
                        <label for="floatingInput">Wachtwoord</label>
                    </div>
                    <?php include 'views/templates/msg.php'; ?>
                    <input type="submit" name="action" value="Log In" class="login_btn btn">
                </form>
                <h6 class="mt-4 text-center">Nog geen account? Meld je <a href="register" class="text-primary">hier</a> aan</h6>
            </div>
        </div>
    </div>
</body>

</html>