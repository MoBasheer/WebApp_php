<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Book a class</title>
</head>
<body>
    <!-- Navbar -->
    <?php include 'views/templates/nav.php'; ?>

    <section class="text-dark p-5 mt-5 text-center text-sm-start">
        <!-- <a href="home" class="btn btn-warning mb-3">Terug</a> -->
        <h1>Alle beschikbare lessen</h1>
        <table class="table table-hover">
            <thead class="table-secondary">
                <th>Datum</th>
                <th>Begintijd</th>
                <th>Eindtijd</th>
                <th>Boeken</th>
            </thead>
            <tbody>
                <?php
                $class = $this->getAvailableClasses();
                foreach ($class as $arrayIterator => $classValue) {
                    echo "<tr><td>" . htmlspecialchars($classValue->date, ENT_COMPAT, 'UTF-8') . "</td>" . "<td>" . htmlspecialchars($classValue->time_start, ENT_COMPAT, 'UTF-8')
                        . "</td>" . "<td>" . htmlspecialchars($classValue->time_end, ENT_COMPAT, 'UTF-8') . "</td>" . "<td>" .  "<button class='book_btn btn btn-success'>Boeken</button>" . "</td></tr>";
                }
                ?>
            </tbody>
        </table>

    </section>
    <section class="text-dark p-5 pt-0 text-center text-sm-start">
        <h1>Overzicht van al uw geboekte lessen</h1>
        <table class="table table-hover">
            <thead class="table-secondary">
                <th>Datum</th>
                <th>Begintijd</th>
                <th>Eindtijd</th>
            </thead>
            <tbody>
                <?php
                // TODO, change function
                $userClasses = $this->getUserClasses();
                foreach ($userClasses as $arrayIterator => $userClassValue) {
                    echo "<tr><td>" . htmlspecialchars($userClassValue->date, ENT_COMPAT, 'UTF-8') . "</td>" . "<td>" . htmlspecialchars($userClassValue->time_start, ENT_COMPAT, 'UTF-8')
                        . "</td>" . "<td>" . htmlspecialchars($userClassValue->time_end, ENT_COMPAT, 'UTF-8') . "</td>" . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="home" class="btn btn-warning mt-5">Terug</a>
    </section>
</body>
<script>
    document.querySelectorAll('.book_btn').forEach(btn => btn.addEventListener('click', (event) => {
        const date = event.target.parentElement.parentElement.children[0].innerText;
        const time_start = event.target.parentElement.parentElement.children[1].innerText;
        const time_end = event.target.parentElement.parentElement.children[2].innerText;

        console.log(date);
        console.log(time_start);
        console.log(time_end);
        
        fetch(`booking`, {
                method: 'POST',
                body: JSON.stringify({
                    date,
                    time_start,
                    time_end
                }),
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
            })
            .then(res => {
                // Refresh page to get new results
                location.reload();
            })
            .catch(console.error);
    }
    ))
</script>
</html>