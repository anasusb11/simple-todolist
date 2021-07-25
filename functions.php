<?php

// konek ke db
$conn = mysqli_connect('localhost', 'root', '', 'todo-list');

function query($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function addData($data)
{
    global $conn;
    $title = htmlspecialchars($data['title']);

    // query insert
    $query = "INSERT INTO todos VALUES ('','$title',current_timestamp())";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id)
{
    global $conn;
    $query = "DELETE FROM todos WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
