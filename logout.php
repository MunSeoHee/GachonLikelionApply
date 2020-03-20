<?php
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["name"]);
    unset($_SESSION["pw"]);
    unset($_SESSION["userlevel"]);
    echo("
        <script>
            location.href = 'info';
        </script>
    ")
?>