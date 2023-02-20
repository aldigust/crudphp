<?php

function getById($id, $table, $conn) {
    $sql = "SELECT * FROM {$table} WHERE id = {$id}";

    $data = mysqli_query($conn, $sql);

    if ($data->num_rows > 0) {
        return mysqli_fetch_assoc($data);
    }
}

function create($data, $table, $column, $conn)
{
    $sql = "INSERT INTO {$table} ({$column}) VALUES ({$data})";

    $query = mysqli_query($conn, $sql);

    return $query;
}

function update($id, $table, $column, $conn)
{
    $sql = "UPDATE {$table} SET $column WHERE id = {$id}";

    $query = mysqli_query($conn, $sql);

    return $query;
}

function delete($id, $table, $conn)
{
    $sql = "DELETE FROM {$table} WHERE id = {$id}";

    $query = mysqli_query($conn, $sql);

    return $query;
}

?>