<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        if ($_SESSION['username']) {
            echo "<h1>Hello " . $_SESSION['username'] . "!</h1>";
        }
    ?>
    <button id='logoutBtn'>Log out</button>    
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
</html>