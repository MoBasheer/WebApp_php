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

<script>
    document.getElementById('logoutBtn').addEventListener('click', async () => {
        fetch('/login', {
                method: 'DELETE',
            })
            .then(() => window.location.href = '/')
            .catch(console.error);
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>