<?php
    include_once 'settings.php';
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    
    $sql = "insert into user (id, pw) values ($id, $pw)";
    $result = mysqli_query($con, $sql);
    
    if($result){
    echo "쿼리성공";
    }else{
    echo "쿼리실패";
    }
    mysqli_close($con);
?>