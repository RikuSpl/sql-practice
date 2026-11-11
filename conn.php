<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "oivallus";

    //connect to database
    $conn = new mysqli($servername, $username, $password);

    //check and create database
    $sql = "CREATE DATABASE IF NOT EXISTS " . $database;
    //check that databse is created
    if($conn->query($sql)){
        echo "Database created <br>";
    } else {
        echo "Error creating database<br>" . $conn->error;
    }
    //connect to created database
    $conn = new mysqli($servername, $username, $password, $database);

    //creating table
    $sql_table = "CREATE TABLE IF NOT EXISTS ideas (
        id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        day DATE NOT NULL,
        idea text NOT NULL,
        category text NOT NULL
    )";

    //check if table is created
    if($conn->query($sql_table)) {
        echo "Table created";
    } else {
        echo "Error creating table: " . $conn->error;
    }
?>