<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <script>
    function button1_click() {
        alert("a");
    <?
     $check = "1";
     $ck["check"] = $check;
     include "servertimetest.php";
     ?>
    }
</script>
</head>
<title>PHP</title>

<body>
    <h1>현재 서버시간 : </h1>
    
<form action="servertimetest.php" method="post">
    <label>first testpage</label>
    <?php
    //  $check = "1";
    //  $ck["check"] = $check;
     ?>
    <input type="button" value="클릭ㅋ" onclick="button1_click()">
</form>
</body>
</html> 
