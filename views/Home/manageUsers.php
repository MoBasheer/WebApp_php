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
    <?php include 'views/templates/nav.php'; ?>

    <!-- User table -->
    <section class="text-dark p-5 mt-5 text-center text-sm-start">
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
                    echo "<tr><td>" . htmlspecialchars($userValue->user_id, ENT_COMPAT, 'UTF-8') . "</td>" . "<td>" . htmlspecialchars($userValue->username, ENT_COMPAT, 'UTF-8')
                        . "</td>" . "<td>" . htmlspecialchars($userValue->role, ENT_COMPAT, 'UTF-8') . "</td>" . "<td>" . (($userValue->role != 'admin') ? "<button class='delete-btn btn btn-danger'>Verwijderen</button>" : '') .  "</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="home" class="btn btn-warning">Terug</a>
    </section>
</body>
<script>
    document.querySelectorAll('.delete-btn').forEach(btn => btn.addEventListener('click', (event) => {
        const username = event.target.parentElement.parentElement.children[1].innerText;
        
        fetch(`/manageUsers?username=${username}`, {
                method: 'DELETE',
            })
            .then(res => {
                // Refresh page to get new results
                location.reload();
            })
            .catch(console.error);
    }))
</script>

</html>