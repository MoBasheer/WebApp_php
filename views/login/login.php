<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container m-3">
        <h1>Welkom, log hier in!</h1>
        <form action="" method="post">
            <div class="form-floating mb-3">
                <input type="text" name="username" placeholder="Gebruikersnaam" class="form-control">
                <label for="floatingInput">Gebruikersnaam</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" placeholder="Wachtwoord" class="form-control">
                <label for="floatingInput">Wachtwoord</label>
            </div>
            <?php
            if (!is_array($data)) {
                echo "<div class='alert alert-danger'>$data</div>";
            }
            ?>
            <input type="submit" name="action" value="Log In" class="btn btn-primary">
        </form>
        <h6 class="mt-3">Nog geen account? Meld je <a href="register" class="text-primary">hier</a> aan</h6>
    </div>
</body>

</html>