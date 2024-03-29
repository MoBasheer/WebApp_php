<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Password Change</title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'views/templates/nav.php'; ?>
    <!-- csrf token -->
    <?php include 'views/templates/token.php'; ?>
    <!--Body -->
    <section class="text-dark p-5 mt-5 text-center text-sm-start">
        <form action="" method="post">
            <div>
                <h1 class="mb-5">Wachtwoord wijzigen</h1>
            </div>
            <div>
                <input type="hidden" name="csrf_token" value="<?php echo $token ?>">
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="old_password" placeholder="Gebruikersnaam" class="form-control">
                <label for="floatingInput">Huidig wachtwoord</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="new_password" placeholder="Wachtwoord" class="form-control">
                <label for="floatingInput">Nieuw wachtwoord</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="new_password_confirm" placeholder="Bevestig wachtwoord" class="form-control">
                <label for="floatingInput">Bevestig nieuw wachtwoord</label>
            </div>
            <?php include 'views/templates/msg.php'; ?>
            <input type="submit" name="action" value="Wachtwoord wijzigen" class="btn btn-success">
            <a href="profile" class="btn btn-warning">Terug</a>
        </form>
    </section>
</body>

</html>