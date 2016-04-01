<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Skunk Works Outreach</title>
    <link rel="stylesheet" type="text/css" href="formStyle.css"/>
</head>
<body>
<h1>Skunk Works Outreach</h1>
<?php
// Keeps all data from the previos form.
session_start();
$_SESSION['owner'] = $_POST['owner'];
$_SESSION['numSkunks'] = $_POST['numSkunks'];
$_SESSION['numMentors'] = $_POST['numMentors'];
$_SESSION['hours'] = $_POST['hours'];
$_SESSION['date'] = $_POST['date'];
?>
<h3>What kind of Event was it?</h3>
<table align="center">
    <tr class="outreachTypeButtonRow">
        <td class="outreachTypeButtonCol"><a href="deeperQuestions.php?type=BOpre" class="outreachTypeButton">Business Presentation</a></td>
        <td class="outreachTypeButtonCol"><a class="outreachTypeButtonD">Business Demo</a></td>
    </tr>
    <tr class="outreachTypeButtonRow">
        <td class="outreachTypeButtonCol"><a class="outreachTypeButton?type=COout">Community Outreach</a></td>
        <td class="outreachTypeButtonCol"><a class="outreachTypeButton?type=COser">Community Service</a></td>
    </tr>
    <tr class="outreachTypeButtonRow">
        <td class="outreachTypeButtonCol"><a class="outreachTypeButton?type=LOleg">Legislative Outreach</a></td>
        <td class="outreachTypeButtonCol"><a class="outreachTypeButton?type=LOedu">Outreach to Educators</a></td>
    </tr>
    <tr class="outreachTypeButtonRow">
        <td class="outreachTypeButtonCol"><a class="outreachTypeButton?type=FIRST">FIRST</a></td>
        <td class="outreachTypeButtonCol"><a class="outreachTypeButtonD?type=ALUMN">Alumni</a></td>
    </tr>
    <tr class="outreachTypeButtonRow">
        <td class="outreachTypeButtonCol"><a class="outreachTypeButton?type=MEDIA">Media</a></td>
        <td class="outreachTypeButtonCol"><a class="outreachTypeButtonD?type=QUOTE">Quotes</a></td>
    </tr>
</table>
</body>
</html>