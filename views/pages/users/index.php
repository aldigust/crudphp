<div class="card">
    <h5 class="card-header">Users</h5>
    <div class="card-body">
        <a type="button" class="btn btn-primary mb-3">Tambah</a>
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
                            <a type="button" class="btn btn-warning">Edit</a>
                            <a type="button" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                        
                <?php    }
                ?>
            </tbody>
        </table>
  </div>
</div>