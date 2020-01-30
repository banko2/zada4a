<?php
    session_start();

    $womanName = $_POST['newWoman'];

    array_push($_SESSION['womanList'], $womanName);

    header('Location: /woman-list');
?>