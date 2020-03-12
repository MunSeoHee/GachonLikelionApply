<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
    }
    else{
        $id = "";
    }
    if(isset($_SESSION["pw"])){
        $pw = $_SESSION["pw"];
    }
    else{
        $pw = "";
    }
    if(isset($_SESSION["userlevel"])){
        $userlevel = $_SESSION["userlevel"];
    }
    else{
        $userlevel = "";
    }
?>
<nav class="navbar navbar-light bg-light ">
    <div class="row justify-content-between">
        <div class="col">
            <a class="navbar-brand" href="main.php"><img src="https://startup.likelion.org/img/logo.png" width="120" height="30"/></a>
        </div>
        <div class="col">
            <?php
                if(!$id){
            ?>
                    <a href="login_page.php">로그인</a>
                    <a href="signin_page.php">회원가입</a>
            <?php
                }
                else{
            ?>
                    <p><?=$id?>님</p>
                    <a href="logout.php">로그아웃</a>
            <?php
                }
            ?>
        <div>
    </div>
</nav>
</body>