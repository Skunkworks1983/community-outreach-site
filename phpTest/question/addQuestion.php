<?php
/**
 * Created by PhpStorm.
 * User: kaedenwile
 * Date: 4/1/16
 * Time: 2:36 PM
 */

$servername = "localhost";
$username = "root";
$password = "touchMonkey8";
$dbname = "skunkData";

$outreach = $_POST["outreach"];
$name = $_POST["name"];
$label = $_POST["label"];
$type = $_POST["type"];
$maxLength = $_POST["maxLength"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO questions (outreach, name, label, type, maxLength)
VALUES ('$outreach', '$name', '$label', '$type', '$maxLength')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: setQuestions.php");
die();