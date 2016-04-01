<?php
/**
 * Created by PhpStorm.
 * User: kaedenwile
 * Date: 3/31/16
 * Time: 1:01 PM
 */

$servername = "localhost";
$username = "root";
$password = "touchMonkey8";
$dbname = "skunkData";

session_start();
$owner = $_SESSION["owner"];
$numSkunks = $_SESSION["numSkunks"];
$numMentors = $_SESSION["numMentors"];
$hours = $_POST["hours"];
$eventDate = $_POST["date"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO data (owner, numSkunks, numMentors, hours, date, type)
VALUES ('$owner', '$numSkunks', '$numMentors', '$hours', '$eventDate', 'BDemo')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>