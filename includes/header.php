<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Site</title> <br>
    &emsp; &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
    &emsp; &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
<a href="index.php">Home</a> &nbsp;
<a href="about.php">About Us</a> &nbsp;
<a href="bloglist.php">Blog List</a> &nbsp;
<a href="contact.php">Contact</a> &nbsp;
</head>
<body>

<?php
$cookie_name= "username";
$cookie_value= "Nischal Adhikari";

setcookie($cookie_name, $cookie_value, time()+(86400*30));


$_SESSION['user_id']=" nischaladhikari@kbc.edu.np";

?>
    
