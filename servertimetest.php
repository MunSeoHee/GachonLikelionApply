<?php
    include_once "servertimetest.php"; 
    ?>
    <h1>현재 서버시간 : </h1>
    <?php
    date_default_timezone_set('Asia/Seoul');
echo "현재 날짜 : ". date("Y-m-d")."<br/>";
echo "현재 시간 : ". date("H:i:s")."<br/>";
echo "현재 일시 : ". date("Y-m-d H:i:s")."<br/>";
echo (date("H"));
if(date("H") =="19"){
    echo "<script> alert('hi');</script>";
}else{
    echo "<script> alert('bye');</script>";
}
?>