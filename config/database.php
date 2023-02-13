<?php
    $server = "localhost";
    $user = "root";
    $pass = "pwd123";
    $database = "testcrud";
    
    $conn = mysqli_connect($server, $user, $pass, $database);
    
    if (! $conn) {
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }