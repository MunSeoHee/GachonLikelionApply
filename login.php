<?php
    $id = $_POST["id"];
    $pw = $_POST["pw"];

    include_once "settings.php";

    $sql = "select * from user where id='$id'";
    $result = mysqli_query($con, $sql);
    $res_num = mysqli_num_rows($result);
    if(!$res_num){
        echo("
            <script>
                window.alert('등록되지 않은 아이디입니다!')
                history.go(-1)
            </script>
        ");
    }
    else{
        $row = mysqli_fetch_array($result);
        $password = $row['pw'];

        if($password != $pw){
            echo("
                <script>
                    window.alert('비밀번호가 틀립니다!')
                    history.go(-1)
                </script>
            ");
            exit;
        }
        else{
            session_start();
            $_SESSION["id"] = $row["id"];
            $_SESSION["pw"] = $row["pw"];
            $_SESSION["userlevel"] = $row["userlevel"];
            echo("
                <script>
                    location.href = 'form.php';
                </script>
            ");
        }
    }

?>