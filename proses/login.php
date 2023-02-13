<?php

include '../config/database.php';

$username = $_POST['username'];
$password = $_POST['katasandi'];

if ($username == '' && $password == '') {
    echo "<script>alert('Username dan password wajib diisi.')</script>";
    header('Location: ../views/pages/login.php');
}

$checkUsername = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$username}' ");

if ($checkUsername->num_rows == 0) {
    header('Location: ../views/pages/login.php');
}else {
    $user = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ");

    if ($user->num_rows > 0) {
        session_start();

        $data = mysqli_fetch_assoc($user);
        $_SESSION['username'] = $data['username'];
        $_SESSION['login'] = true;
        header('Location: ../views/pages/home.php');
    }

    echo "Data tidak ditemukan";
}
