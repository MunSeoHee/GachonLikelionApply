<?php
    include_once "servertimetest.php"; 
    ?>
    <h1>현재 서버시간 : </h1>
    <?php
echo "asd";
echo "현재 날짜 : ". date("Y-m-d")."<br/>";
echo "현재 시간 : ". date("H:i:s")."<br/>";
echo "현재 일시 : ". date("Y-m-d H:i:s")."<br/>";
if(date("h" == "7")){
alert("hi");
}else{
    alert("bye");
}
?>