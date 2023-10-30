<?php

include_once 'db.php';


$sql = "SELECT * FROM usuarios";
$return = mysqli_query($db,$sql);

if($return){
    while ($row = mysqli_fetch_array($return)) {
        echo $row['usuario']." - ".$row['senha']."<br>";
    }
}
?>