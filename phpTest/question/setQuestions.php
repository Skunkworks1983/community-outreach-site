<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Skunk Works Outreach</title>
    <link rel="stylesheet" type="text/css" href="questionStyle.css"/>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "touchMonkey8";
$dbname = "skunkData";

session_start();
$eventType = $_GET["type"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

$conn->close();
?>
<h1>Skunk Works Outreach</h1>
<h3>What questions do you want to ask?</h3>
<table align="center">
    <tr>
        <th>Outreach</th>
        <th>Name</th>
        <th>Label</th>
        <th>Type</th>
        <th>Max Length</th>
        <th>ACTION</th>
    </tr>
    <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["outreach"]."</td><td>"
                    .$row["name"]."</td><td>"
                    .$row["label"]."</td><td>"
                    .$row["type"]."</td><td>"
                    .$row["maxLength"]."</td><td>
                    <a class='remove' href='deleteQuestion.php?item=".$row["name"]."'>REMOVE</a></td></tr>";
            }
        }
    ?>
    <tr>
        <td><a class='add' href="addQuestion.html">Add</a></td>
    </tr>
</table>
</body>
</html>