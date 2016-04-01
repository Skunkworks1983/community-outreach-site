<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Skunk Works Outreach</title>
    <link rel="stylesheet" type="text/css" href="formStyle.css"/>
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

$sql = "SELECT * FROM questions WHERE outreach='$eventType'";
$result = $conn->query($sql);

$conn->close();
?>

<h1>Skunk Works Outreach</h1>
<h3>Here are some deeper questions about your <?php print $_GET["type"];?></h3>
<form method="POST" action="final.php">
    <table align="center">
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td class='labelWrapper'><label for='" . $row["name"] .
                    "'>" . $row["label"]. "</label></td><td><input type='" . $row["type"] .
                    "' id='" . row["name"] . "' name='" . row["name"] .
                    "' size='20' maxlength='" . row["maxlength"] . "'/></td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
    <div class="submitButtonWrapper">
        <button class="submitButton" type="submit">Submit</button>
    </div>
</form>
</body>
</html>