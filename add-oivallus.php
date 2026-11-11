<?php 
    $day = date("Y-m-d");
    $idea = $_GET["idea"];
    $category = $_GET["category"];

    //connect to db
    require_once("conn.php");

    //adding a row
    $sql = "INSERT INTO ideas (day, idea, category) VALUES ('$day', '$idea', '$category')";

    if($conn->query($sql)){
        echo "Row added";
    } else {
        echo "Something went wrong";
    }

    $conn->close();

    header("Location: " . $_SERVER["HTTP_REFERER"]);
?>