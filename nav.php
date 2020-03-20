<style>
    a:link { color: white; text-decoration: none;}
    a:visited { color: white; text-decoration: none;}
    a:hover { color: white!important; text-decoration: none!important;}
      </style> 
<body>
<?php
    session_start();
    if(isset($_SESSION["name"])){
        $name = $_SESSION["name"];
    }
    else{
        $name = "";
    }
    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }
    else{
        $name = "";
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
<nav class="navbar navbar-light container-fluid p-0" style="background-color: black;">
    <div class="container-fluid p-0">
        <div class="row w-100 d-flex justify-content-between">
            <div class="col">
                <a class="navbar-brand" href="main.php"><img src="https://startup.likelion.org/img/logo.png" width="120" height="30"/></a>
            </div>
            <div class="col text-right text-light">
                <div class="row d-flex justify-content-end">
                <?php
                    if(!$name){
                ?>
                        <a class="mr-3" href="login_page.php">로그인</a>
                        <a class="mr-3" href="signin_page.php">회원가입</a>
                        
                        
                <?php
                    }
                    else{
                ?>      <a class="mr-3" href="#"><?=$name?>님</a>
                        <a class="mr-3" href="logout.php">로그아웃</a>
                <?php
                    }
                ?>
                </div>
                
            <div>
        </div>
    </div>
   
</nav>
