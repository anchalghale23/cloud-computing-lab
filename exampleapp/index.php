<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



mysqli_close($conn);
?> 

<html></<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CC LAB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <form action="submit.php" method="post">
    Email:
        <input type="email" name="email"><br>
    Name:
        <input type="text" name="name"><br>
    
    <input type="submit" value="go"> 
    </form>



</body>
</html>