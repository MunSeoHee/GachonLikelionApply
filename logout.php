<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["pw"]);
    unset($_SESSION["userlevel"]);
    echo("
        <script>
            location.href = 'main.php';
        </script>
    ")
?>