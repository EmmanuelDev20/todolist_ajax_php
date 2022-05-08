<?php

include "db.php";

$query = "SELECT * FROM task ORDER BY id DESC";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Query error' . mysqli_error($conn));
}
$json = array();

while ($row = mysqli_fetch_array($result)) {
    $json[] = array(
        'name' => $row['name'],
        'description' => $row['descripcion'],
        'id' => $row['id']
    );
}
$json_string = json_encode($json);
echo $json_string;
