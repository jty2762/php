<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <br>
                <h2>Login</h2>
                <hr>
                <br>
                <form action="login_process.php" method="GET">
                    <nav class="navbar bg-body-tertiary">
                        <form class="d-flex justify-content-center" role="ID">
                            <input class="form-control me-2" type="text" name="username" placeholder="username" aria-label="username">
                            <br>
                            <input class="form-control me-2" type="password" name="password" placeholder="password" aria-label="password">
                            <button class="btn btn-primary" type="submit">LOGIN</button>
                        </form>
                    </nav>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>
