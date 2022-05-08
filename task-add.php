<?php

include "db.php";

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    
    $query = "INSERT INTO task (name, descripcion) VALUES ('$name', '$description')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('Query error' . mysqli_error($conn));
    }

    echo "Exito";
}
