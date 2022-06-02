<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Profile</title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'views/templates/nav.php'; ?>

    <!-- Body -->
    <section class="text-dark p-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1 class="pt-5">Je gegevens bekijken en bewerken</h1>
                </div>
            </div>
            <table class="mt-5">
                <tr>
                    <th>Username:</th>
                    <td><input class="form-control ms-3" type="text" placeholder=<?= htmlspecialchars(ucfirst($_SESSION['username']), ENT_COMPAT, 'UTF-8') ?> disabled></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input class="form-control ms-3" type="password" placeholder="wachtwoord" value="*******" disabled></td>
                </tr>
            </table>
            <a href="passwordChange" class="btn btn-info mt-5">Wachtwoord wijzigen</a>
            <a href="home" class="btn btn-warning mt-5">Terug</a>
        </div>
    </section>
</body>

</html>