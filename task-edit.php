<?php

include "db.php";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $id = $_POST['id'];

    $query = "UPDATE task SET name = '$name', descripcion = '$description' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('Query error' . mysqli_error($conn));
    }

    echo "Task updated";
}