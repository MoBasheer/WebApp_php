    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="/home" class="navbar-brand">De IJverRijschool</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/home" class="nav-link">Home</a>
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