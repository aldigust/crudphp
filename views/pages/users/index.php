<div class="card">
    <h5 class="card-header">Users</h5>
    <div class="card-body">
        <a href="index.php?page=users&action=create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table table-striped table-hover">
            <thead>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM users order by username";

                    $users = $conn->query($sql);
                    $no = 1;
                    while ($user = $users->fetch_array()) { ?>

                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $user['username'] ?></td>
                        <td>
                            <a href="index.php?page=users&action=edit&id=<?= $user['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="index.php?page=users&id=<?= $user['id'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                        
                <?php    }
                ?>
            </tbody>
        </table>
  </div>
</div>

<?php 
    require_once './proses/crud.php';
    if (isset($_GET['id'])) {
        if (delete($_GET['id'], 'users', $conn)) {
            header("Location: /index.php?page=users");
        }
    }

?>