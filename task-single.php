<?php

include "db.php";


if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query failed');
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'name' => $row['name'],
            'description' => $row['descripcion'],
            'id' => $row['id']
        );
    }

    $jsonString = json_encode($json[0]);
    echo $jsonString;

}