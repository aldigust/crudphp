<?php 
    include '../../proses/auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title>Halaman Login</title>
    
</head>
<body class="bg-warning">
    <div class="container-fluid bg-warning">
        <?php include '../layouts/navbar.php' ?>

        <div class="card bg-info">
            <div class="card-body mx-auto">
            <form action="/proses/login.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="katasandi">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    <script src="/assets//bootstrap/js/bootstrap.min.js"></script>
</body>
</html>