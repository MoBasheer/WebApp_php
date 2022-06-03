<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        <?php include 'views/templates/style.css'; ?>
    </style>
    <title>Home</title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'views/templates/nav.php'; ?>

    <!-- Body -->
    <section class="text-dark p-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1 class="pt-5">Welkom, <span class="text-danger">
                            <?php if ($_SESSION['username']) {
                                echo htmlspecialchars(ucfirst($_SESSION['username']), ENT_COMPAT, 'UTF-8');
                            } ?> </span>
                    </h1>
                    <p class="lead my-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards -->
    <?php 
 if ($_SESSION['role'] == 'admin') {
     echo '
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h3 class="card-title mb-3">Gebruikers beheren</h3>
                            <p class="card-text">
                                Beheer alle gebruikers hier, door op de onderste knop te klikken.
                            </p>
                            <a href="/manageUsers" class="card_btn btn">Beheren</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-calendar-plus-fill"></i>
                            </div>
                            <h3 class="card-title mb-3">Beschikbaarheid</h3>
                            <p class="card-text">
                                Voeg je beschikbaarheid toe zodat klanten lessen kunnen boeken.
                            </p>
                            <a href="/dateAdd" class="card_btn btn">Toevoegen</a>
                        </div>
                    </div>
                </div>
    </section>';
 } else {
    echo '<section class="p-5">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-calendar-plus-fill"></i>
                        </div>
                        <h3 class="card-title mb-3">Rijles boeken</h3>
                        <p class="card-text">
                        Boek hier een les op basis van de beschikbaarheid van uw rij-instructeur.
                        </p>
                        <a href="/booking" class="card_btn btn">Boeken</a>
                    </div>
                </div>
            </div>';
 }
    ?>
</body>

</html>