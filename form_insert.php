<?php
    session_start();
    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }
    else{
        $email = "";
    }
    // echo $id;
    $question1=$_POST["question1"];
    $question2=$_POST["question2"];
    $question3=$_POST["question3"];
    $question4=$_POST["question4"];
    $question5=$_POST["question5"];
    $question6=$_POST["question6"];
    $question7=$_POST["question7"];
    $question8=$_POST["question8"];
    // echo nl2br($question2);
    // echo $question3;
    $date = date("Y-m-d H:i:s");
    include_once "settings.php";
    $sql = "select * from written where email='$email'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if(!$row){
        $sql="insert into written (question1, question2, question3, question4, question5, question6, question7, question8, date, email)
        values ('$question1', '$question2', '$question3', '$question4', '$question5', '$question6', '$question7', '$question8', '$date', '$email')";

        $result = mysqli_query($con, $sql);

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
    }else{
        $sql="update written set 
        question1='$question1', question2='$question2', question3='$question3', question4='$question4', 
        question5='$question5', question6='$question6', question7='$question7', question8='$question8', date='$date'
        where email=='$email';"

        $result = mysqli_query($con, $sql);

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
    }

   

?>