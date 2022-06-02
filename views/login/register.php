<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        <?php include 'views/templates/style.css'; ?>
    </style>
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center ">
            <div class="col col-sm-2 col-md-6 col-lg-4 rounded p-4 shadow">
                <div class="row justify-content-center mb-4">
                    <img class="logo" src="https://scontent-ams4-1.xx.fbcdn.net/v/t39.30808-6/262430885_109045001614891_2890011228913943444_n.png?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=Ae_IE7Gmq_AAX9Bq-6B&_nc_oc=AQkyFoDAi1eYKXg9j3bBpYbX_0nPgEDpg53NOX-f9IOxUXc9ESwvK7G04JDRvtTp06U&_nc_ht=scontent-ams4-1.xx&oh=00_AT9dElGKp_obqW3cEyqjmULKVrqLoLF6u6pVAkLDBQqNNw&oe=629AA5DA" alt="De IJver Rijschool Logo">
                </div>
                <h1 class="mb-4 text-center">Meld je hier aan</h1>
                <form action="" method="post">
                    <div class="form-floating mb-4">
                        <input type="text" name="username" placeholder="Gebruikersnaam" class="form-control">
                        <label for="floatingInput">Gebruikersnaam</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" placeholder="Wachtwoord" class="form-control">
                        <label for="floatingInput">Wachtwoord</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password_confirm" placeholder="Bevestig wachtwoord" class="form-control">
                        <label for="floatingInput">Bevestig wachtwoord</label>
                    </div>
                    <?php include 'views/templates/msg.php'; ?>
                    <input type="submit" name="action" value="Aanmelden" class="btn">
                </form>
                <h6 class="mt-4 text-center">Heb je al een account? Log <a href="login" class="text-primary">hier</a> in</h6>
            </div>
        </div>
    </div>
</body>

</html>