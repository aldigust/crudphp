<?php


$action = null;
$page = null;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

else if ($page == "users") {
    include 'users/index.php';
} else if ($page == "users" && $action == "create") {
    include 'users/create.php';
} else if ($page == "users" && $action == "edit") {
    include 'users/edit.php';
} 