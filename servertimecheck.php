<!--<h1>현재 서버시간 : </h1>-->
<?php
// $check = $_POST["check"];
// echo "테스트 제대로 되나?";
//echo "<script> alert('test.');</script>";
$prevPage = $_SERVER['HTTP_REFERER'];
date_default_timezone_set('Asia/Seoul');
//echo "<script> alert('1 받음.');</script>";
//echo $_POST["check"];
// echo "현재 날짜 : ". date("Y-m-d")."<br/>";
// echo "현재 시간 : ". date("H:i:s")."<br/>";
// echo "현재 일시 : ". date("Y-m-d H:i:s")."<br/>";
// echo (date("H"));
$year = date("Y");
$month = date("m");
$date = date("d");
if($year == 2019 && $month == 3 && $date > 23){
    echo "<script> alert('hi');</script>";
    // if($check == "1"){
    //     echo "<script> alert('1 받음.');</script>";
    // }
    // if($check == "2"){
    //     echo "<script> alert('2 받음.');</script>";
    // }
}else{
    echo $year + "<script> alert('아직 시간이 아닙니다.');
            history.back();
        </script>";
    //history.back();
    //sleep(3);
    //header('location:'.$prevPage);
    // if($check == "1"){
    //     echo "<script> alert('1 받음.');</script>";
    // }
    // else if($check == "2"){
    //     echo "<script> alert('2 받음.');</script>";
    // }else{
    //     echo "<script> alert('3 받음.');</script>";
    // }
}
?>
<!-- ubuntu@ec2-18-224-229-40.us-east-2.compute.amazonaws.com -->