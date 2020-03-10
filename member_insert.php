<?php
    include_once 'settings.php';
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    
    $sql = "insert into user (id, pw) values ('$id', '$pw')";
    $result = mysqli_query($con, $sql);

    echo " 
        <script>
            location.href = 'main.php';
        </script>
    ";
?>