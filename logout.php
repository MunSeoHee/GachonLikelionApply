<?php
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["pw"]);
    unset($_SESSION["userlevel"]);
    echo("
        <script>
            location.href = 'index.php';
        </script>
    ")
?>