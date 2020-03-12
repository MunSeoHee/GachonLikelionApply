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
        <p>로그아웃</p>