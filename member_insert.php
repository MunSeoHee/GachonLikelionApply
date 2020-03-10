<?php
    include_once 'settings.php';
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    
    $sql = "insert into user (id, pw) values ($id, $pw)";
    mysqli_query($con, $sql);
    mysqli_close($con);


?>