<?php 

if (isset($_GET['id'])) {
    $error = "";
    require_once "./proses/crud.php";

    $user = getById($_GET['id'], 'users', $conn);

} else {
    header("Location: /index.php?page=users");
}
    
?>

<div class="card">
    <div class="card-header">Form Users</div>
    <div class="card-body">
    <?php 
    //    if ($error != "") {
    //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $error . '
    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    // </div>';
    ?>
    <form action="" method="post">
        <?php  include 'form.php' ?>
    </form>
    </div>
</div>

<?php 


if (isset($_POST['username']) && isset($_POST['password'])) {

    if ($_POST['username'] == '') {
        $error = "Username tidak boleh kosong";
    } else if($_POST['password'] == '') {
        $error = "Password tidak boleh kosong";
    } else if ($_POST['username'] == '' && $_POST['password'] == '') {
        $error = "Username dan password wajib diisi";
    } else {
        $data = $_GET['id'];
        $table = 'users';
        $column = "username = '{$_POST['username']}', password = '{$_POST['password']}'";
        $koneksi = $conn;
        if (update($data, $table, $column, $koneksi)) {
            header("Location: /index.php?page=users");
        }
    }
} else {
    $error = "Username atau password wajib diisi";
}

?>