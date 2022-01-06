<?php
    $id = $_SESSION['id'];
    $database = new mysqli('localhost', 'root', '', 'bookademy');
    $database->query("DELETE FROM webusers WHERE id='$id'");
    header('Location: ../../index.php');
    exit();
?>