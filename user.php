<!Doctype html>
<head>
</head>
<?php
    include_once "settings.php";
    $sql = "select * from user";
    $result = mysqli_query($con, $sql);
?>

<body>
    <div class="container">
        <div class="row mt-3">
            <?php
                while ( $row = mysqli_fetch_array($result) ) {
                    echo $row['name']." ".$row['gender']." ".$row['year']." ".$row['phone']." ".$row['degree'].$row['email']."<br>";
           
            }?>
        </div>

    </div>
</body>
</html>