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
    
<form method="post">
    <label>first testpage</label>
    <?php
    //  $check = "1";
    //  $ck["check"] = $check;
     ?>
    <input type="submit" name="test" id="test" value="RUN" />


</form>
</body>
</html> 
<?php 
function testfun() {
     echo "Your test function on button click is working"; 
        } 
            if(array_key_exists('test',$_POST)){ testfun(); 
        }
      ?>

