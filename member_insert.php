<?php
    include_once 'settings.php';
    $email = $_POST["email"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $major = $_POST["major"];
    $year = $_POST["year"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $degree = $_POST["degree"];
    $doublemajor = $_POST["doublemajor"];

    $sql = "select * from user where email='$email'";
    $result = mysqli_query($con, $sql);
    $res = mysqli_num_rows($result);

    //아이디가 DB에 있을 경우
    if($res){
        echo "<script> alert('이미 존재하는 이메일입니다.');</script>";
        //이전 페이지로 돌아가기
        echo "<script> window.history.back();</script>";
        exit();
    }
    //아이디가 DB에 없을 경우
    else{
        //DB에 user 정보 삽입
        $sql = "insert into user (email, pw, userlevel, name, major, year, gender, phone, degree, doublemajor) values ('$email', '$pw', 1, '$name', '$major', '$year', '$gender', '$phone', '$degree', '$doublemajor')";
        $result = mysqli_query($con, $sql);
        //결과가 성공적일 경우
        if($result){
            //가입 완료 안내 후 main 페이지로 이동
            echo "<script> alert('가입 되었습니다.');</script>";
            echo " 
            <script>
                location.href = 'info';
            </script>
        ";
        }
        //실패했을 경우
        else{
            //실패 안내 후 이전 페이지로 
            echo "<script> alert('가입에 실패하였습니다.');</script>";
            echo "<script> window.history.back();</script>";
            exit();
        }
    
        
    }
    
?>