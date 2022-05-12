<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <div class="container m-3">
        <h1>Meld je hier aan</h1>
        <form action="" method="post">
            <div class="form-floating mb-3">
                <input type="text" name="username" placeholder="Gebruikersnaam" class="form-control">
                <label for="floatingInput">Gebruikersnaam</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" placeholder="Wachtwoord" class="form-control">
                <label for="floatingInput">Wachtwoord</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password_confirm" placeholder="Bevestig wachtwoord" class="form-control">
                <label for="floatingInput">Bevestig wachtwoord</label>
            </div>
            <?php
            if (!is_array($data)) {
                echo "<div class='alert alert-danger'>$data</div>";
            }
            ?>
            <input type="submit" name="action" value="Aanmelden" class="btn btn-primary">
        </form>
        <h6 class="mt-3">Heb je al een account? Log <a href="login" class="text-primary">hier</a> in</h6>
    </div>
</body>

</html>