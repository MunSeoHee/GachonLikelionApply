<!Doctype html>
<head>
</head>
<body>

    <?php
        include "servertimecheck.php"
    ?>

    <input type="button" id = "test" value="click" onclick="button1_click();" method = "post">
</body>
</html>
<script>
    function button1_click() {
        alert("버튼1을 누르셨습니다.");
    }
</script>