<?php
    $email = $_POST["email"];
    $pw = $_POST["pw"];

    include_once "settings.php";

    $sql = "select * from user where email='$email'";
    $result = mysqli_query($con, $sql);
    $res_num = mysqli_num_rows($result);
    if(!$res_num){
        echo("
            <script>
                window.alert('등록되지 않은 이메일입니다!')
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
            $_SESSION["email"] = $row["email"];
            $_SESSION["name"] = $row["name"];
            $_SESSION["pw"] = $row["pw"];
            $_SESSION["userlevel"] = $row["userlevel"];
            echo("
                <script>
                    location.href = 'info';
                </script>
            ");
        }
    }

?>