<?php
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
    }
    else{
        $id = "";
    }
    echo $id;
    $name=$_POST["name"];
    $major=$_POST["major"];
    $year=$_POST["year"];
    $gender=$_POST["gender"];
    $phone=$_POST["phone"];
    $dgree=$_POST["dgree"];
    $question1=$_POST["question1"];
    $question2=$_POST["question2"];
    $question3=$_POST["question3"];
    $date = date("Y-m-d H:i:s");
    include_once "settings.php";

    $sql="insert into written (name, major, year, gender, phone, dgree, question1, question2, question3, date, userid)
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
        echo mysqli_error($con);
       
    }

?>