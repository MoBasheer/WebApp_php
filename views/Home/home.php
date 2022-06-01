<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                    <?php
                    if ($_SESSION['role'] == 'admin') {
                        echo '<a href="/manageUsers" class="btn btn-secondary btn-lg">Gebruikers beheren</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

</body>

</html>