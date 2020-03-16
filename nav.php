<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
    .bgimg {
    border: 0;
    padding: 0; 
    background-image: url(\lion.jpg);
    min-height: 100%;
    background-position: center;
    background-size: cover;
    background-repeat : no-repeat;
		}
     @font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff%27') format('woff'); font-weight: normal; font-style: normal; }
        @font-face { font-family: 'yg-jalnan'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_four@1.2/JalnanOTF00.woff%27') format('woff'); font-weight: normal; font-style: normal; }
        h2,a{
            color:rgba(243, 212, 73, 0.904);
            font-family:'GmarketSansBold '; 
            text-decoration: none;
        }
        p{
            font-size: 120%;
            color:rgba(243, 212, 73, 0.904);
            font-family: 'yg-jalnan'; 
        }
      </style> 
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }
    else{
        $email = "";
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
<nav class="navbar navbar-light" style="background-color: black;">
    <div class="container-fluid">
        <div class="row w-100 d-flex justify-content-between">
            <div class="col">
                <a class="navbar-brand" href="main.php"><img src="https://startup.likelion.org/img/logo.png" width="120" height="30"/></a>
            </div>
            <div class="col text-right text-light">
                <?php
                    if(!$email){
                ?>
                        <a href="login_page.php">로그인</a>
                        <a href="signin_page.php">회원가입</a>
                <?php
                    }
                    else{
                ?>
                        <?=$email?>님
                        <a href="logout.php">로그아웃</a>
                <?php
                    }
                ?>
            <div>
        </div>
    </div>
   
</nav>
</body>