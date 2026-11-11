<?php 
    require_once("conn.php");

    $sql = "DELETE FROM ideas WHERE id=" . $_GET["id"];

    $conn->query($sql);
    $conn->close();

    header("Location:" . $_SERVER["HTTP_REFERER"]);
?>