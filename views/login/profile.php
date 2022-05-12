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
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">De IJverRijschool</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/Home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Tariven</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Werken Bij</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <a href="/profile" class="btn btn-outline-secondary text-light me-2">Profiel</a>
                    <button id='logoutBtn' class="btn btn-danger">Uitloggen</button>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Body -->
    <section class="bg-light text-dark p-5 text-center text-sm-start">
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
            <a href="#" class="btn btn-info mt-5">Wachtwoord wijzigen</a>
            <a href="home" class="btn btn-warning mt-5">Terug</a>
        </div>
    </section>
</body>

</html>