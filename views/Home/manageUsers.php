<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gebruikers beheren</title>
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

    <!-- User table -->
    <section class="bg-light text-dark p-5 mt-5 text-center text-sm-start">
        <h1>Gebruikers lijst</h1>
        <table class="table table-hover">
            <thead class="table-secondary">
                <th>Gebruiker ID</th>
                <th>Gebruikersnaam</th>
                <th>Role</th>
                <th>Actie</th>
            </thead>
            <tbody>
                <?php
                $user = $this->getUsers();
                foreach ($user as $arrayIterator => $userValue) {
                    echo "<tr><td>" . $userValue->user_id . "</td>" . "<td>" . htmlspecialchars($userValue->username, ENT_COMPAT, 'UTF-8')
                        . "</td>" . "<td>" . $userValue->role . "</td>" . "<td>" . "<a href='home' class='btn btn-danger'>Verwijderen</a>" .  "</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="home" class="btn btn-warning">Terug</a>
    </section>
</body>

</html>