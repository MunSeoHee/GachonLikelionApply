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
            <div class="col-lg-8">
                <a class="navbar-brand" href="main.php"><img src="https://startup.likelion.org/img/logo.png" width="120" height="30"/></a>
            </div>
            <div class="col-lg-4 text-right text-light">
                <div class="row">
                <?php
                    if(!$name){
                ?>
                        <div class="col-sm d-flex justify-content-end"><a href="login_page.php">로그인</a></div>
                        <div class="col-sm d-flex justify-content-start"><a href="signin_page.php">회원가입</a></div>
                        
                        
                <?php
                    }
                    else{
                ?>      <div class="col-sm d-flex justify-content-end"><?=$name?>님</div>
                        <div class="col-sm d-flex justify-content-start"><a href="logout.php">로그아웃</a></div>
                <?php
                    }
                ?>
                </div>
                
            <div>
        </div>
    </div>
   
</nav>
