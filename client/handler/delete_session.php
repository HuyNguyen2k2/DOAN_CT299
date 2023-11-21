<?php
    session_start();
    unset($_SESSION['tree_acc']);
    header('Refresh: 0.1; url=../index.php ');
?>