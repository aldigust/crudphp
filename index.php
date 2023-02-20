<?php 

require_once "./proses/auth.php";

if (!checkAuth()) {
    header("Location: views/pages/login.php");
}

include './config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php include 'views/layouts/navbar.php' ?>
    <div class="container mt-3">
    <?php include './views/pages/content.php' ?>
    </div>
    <script src="/assets//bootstrap/js/bootstrap.min.js"></script>
</body>
</html>