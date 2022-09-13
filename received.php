<?php
    require_once "cryptography.php";

    $code = $_GET['code'];

    echo $code;
    echo "<br>";
    echo decrypt($code);
?>