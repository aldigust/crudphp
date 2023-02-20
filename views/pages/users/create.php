<?php 
    require_once "./proses/crud.php";

    if (isset($_POST['username']) && isset($_POST['password'])) {

        if ($_POST['username'] == '') {
            $error = "Username tidak boleh kosong";
        } else if($_POST['password'] == '') {
            $error = "Password tidak boleh kosong";
        } else if ($_POST['username'] == '' && $_POST['password'] == '') {
            $error = "Username dan password wajib diisi";
        } else {
            $data = "'".$_POST['username'] . "', '" . $_POST['password'] . "'";
            $table = 'users';
            $column = "username, password";
            $koneksi = $conn;
            if (create($data, $table, $column, $koneksi)) {
                header("Location: /index.php?page=users");
            }
        }
    } else {
        $error = "Username atau password wajib diisi";
    }
?>

<div class="card">
    <div class="card-header">Form Users</div>
    <div class="card-body">
    <?php 
        // if (isset($error)) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $error . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        // }
    ?>
    <form action="" method="post">
        <?php  include 'form.php' ?>
    </form>
    </div>
</div>