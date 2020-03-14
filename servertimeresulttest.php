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
    
<form method="post">
    <label>first testpage</label>
    <input type="submit" name="test" id="test" value="RUN" />


</form>
</body>
</html> 
<?php 
function testfun() {
     echo "Your test function on button click is working"; 
     $check = "1";
    $_POST["check"] = $test;
    include "servertimetest.php";
        } 
            if(array_key_exists('test',$_POST)){ testfun(); 
        }
      ?>

