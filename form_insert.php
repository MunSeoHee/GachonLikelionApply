<?php
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
    }
    else{
        $id = "";
    }
    $name=$_POST["name"];
    $major=$_POST["major"];
    $year=$_POST["year"];
    $gender=$_POST["gender"];
    $phone=$_POST["phone"];
    $dgree=$_POST["dgree"];
    $question1=$_POST["question1"];
    $question2=$_POST["que2"];
    $question3=$_POST["quest3"];
    $date = date("Y-m-d H:i:s");
    include_once "settings.php";

    $sql="insert into written (name, major, year, gender, phone, degree, question1, question2, question3, date, userid)
            values ('$name', '$major', '$year', '$gender', '$phone', '$dgree', '$question1', '$question2', '$question3', '$date', '$id')";

    $result = mysqli_query($con, $sql);

    echo $result;
    if($result){
        echo("
            <script>
                location.href = 'result.php';
            </script>
        ");
    }
    else{
        echo("
            <script>
                window.alert('지원서 작성에 실패했습니다.')
                history.go(-1)
            </script>
        ");
       
    }

?>