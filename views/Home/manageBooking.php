<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        <?php include 'views/templates/style.css'; ?>
    </style>
    <title>Manage Booking</title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'views/templates/nav.php'; ?>
    <!-- Availability add section -->
    <section class="text-dark p-5 mt-5 text-center text-sm-start">
        <h1>Beschikbaarheid toevoegen</h1>
        <form class="mg_bo_form" action="" method="post">
            <div class="form-floating mb-4">
                <input type="date" name="date" placeholder="Datum" class="form-control">
                <label for="floatingInput">Datum</label>
            </div>
            <div class="form-floating mb-4">
                <input type="time" name="time_start" placeholder="Begintijd" class="form-control">
                <label for="floatingInput">Begintijd</label>
            </div>
            <div class="form-floating mb-4">
                <input type="time" name="time_end" placeholder="Eindtijd" class="form-control">
                <label for="floatingInput">Eindtijd</label>
            </div>
            <?php include 'views/templates/msg.php'; ?>
            <input type="submit" name="action" value="Voeg toe" class="add_btn btn btn-success">
        </form>
    </section>

    <!-- Availability section -->
    <section class="text-dark p-5 text-center text-sm-start">
        <h1>Lessen overzicht</h1>
        <table class="table table-hover">
            <thead class="table-secondary">
                <th>Datum</th>
                <th>Begintijd</th>
                <th>Eindtijd</th>
                <th>Geboekt door</th>
            </thead>
            <tbody>
                <?php
                $class = $this->getClasses();
                foreach ($class as $arrayIterator => $userValue) {
                    echo "<tr><td>" . htmlspecialchars($userValue->date, ENT_COMPAT, 'UTF-8') . "</td>" . "<td>" . htmlspecialchars($userValue->time_start, ENT_COMPAT, 'UTF-8')
                        . "</td>" . "<td>" . htmlspecialchars($userValue->time_end, ENT_COMPAT, 'UTF-8') . "</td>" . "<td>" . htmlspecialchars($userValue->username, ENT_COMPAT, 'UTF-8') . "</td>" . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="home" class="btn btn-warning mt-5">Terug</a>
    </section>
</body>

</html>