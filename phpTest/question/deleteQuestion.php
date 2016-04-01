<?php
/**
 * Created by PhpStorm.
 * User: kaedenwile
 * Date: 4/1/16
 * Time: 1:52 PM
 */

$servername = "localhost";
$username = "root";
$password = "touchMonkey8";
$dbname = "skunkData";

$item=$_GET["item"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM questions
WHERE name='$item'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: setQuestions.php");
die();