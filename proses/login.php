<?php

include '../config/database.php';

$username = $_POST['username'];
$password = $_POST['katasandi'];

if ($username == '' && $password == '') {
    echo "Username dan password wajib diisi";
    die;
}

$checkUsername = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$username}' ");

if ($checkUsername->num_rows == 0) {
    header('Location: ../login.php');
}else {
    $user = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ");

    if ($user->num_rows > 0) {
        session_start();

        $data = mysqli_fetch_assoc($user);
        $_SESSION['username'] = $data['username'];
        header('Location: ../home.php');
    }

    echo "Data tidak ditemukan";
}
