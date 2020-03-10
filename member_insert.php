<?php
    include_once 'settings.php';
    $id = $_POST["id"];
    $pw = $_POST["pw"];

    $sql = "select * from user where id='$id'";
    $result = mysqli_query($con, $sql);
    $res = mysqli_num_rows($result);

    if($res){
        echo "<script> alert('이미 존재하는 아이디입니다.');</script>";
        echo "<script> window.history.back();</script>";
        exit();
    }
    else{
        $sql = "insert into user (id, pw) values ('$id', '$pw')";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<script> alert('가입 되었습니다.');</script>";
            echo " 
            <script>
                location.href = 'main.php';
            </script>
        ";
        }
        else{
            echo "<script> alert('가입에 실패하였습니다.');</script>";
            echo "<script> window.history.back();</script>";
            exit();
        }
    
        
    }
    
?>