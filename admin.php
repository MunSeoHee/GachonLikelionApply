<!Doctype html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<?php
    include_once "settings.php";
    $sql = "select email from written";
    $result = mysqli_query($con, $sql);
?>
<body>
    <div class="container">
        <div class="row mt-3">
            <?php
                while ( $row = mysqli_fetch_array($result) ) {
                    $email = $row["email"];
                    $sql = "select * from user where email='$email'";
                    $res = mysqli_query($con, $sql);
                    $r = mysqli_fetch_array($res);
            ?>
                    <div class="col-sm p-0">
                        <div class="card p-0 m-0" style="width: 15rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?=$r["name"]?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?=$r["major"]?>
                                    <?php
                                        if($r["gender"] == 1){
                                            echo "남자"
                                        }else{
                                            echo "여자"
                                        }
                                    ?>
                                </h6>
                                <p class="card-text"><?=$r["year"]?>년도 입학<br><?=$r["degree"]?>학년<br><?=$r["doublemajor"]?></p>
                                <a href="admin_view.php?email=<?=$email?>" class="card-link">지원서보기</a>
                            </div>
                        </div>
                    </div>
            <?php
            }?>
        </div>

    </div>
</body>
</html>