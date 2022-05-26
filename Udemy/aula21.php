<?php
    session_start();

    $_SESSION["key"] = date("H:i:s");

if(isset($_SESSION["key"])) {
    echo $_SESSION["key"];
}

?>