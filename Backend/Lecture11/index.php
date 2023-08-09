<?php

$firstName = $_POST['firstName'];
$secondName = $_POST['lastName'];


if($firstName=="Mohamed" && $secondName=="Hossam"){
    $Welcome_msg="Welcome Boss";
}
else{
    $Welcome_msg="Welcome Guest";
    }













?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 11</title>
</head>
<body>
    <h1>This is Lecture 11!</h1>
    <form method="post">
        <input type="text"placeholder="First Name" name="firstName">
        <input type="text"placeholder="Second Name" name="lastName">
        <br>
        <input type="text"placeholder="Email" name="Email">
        <input type="submit">
    </form>
    <h1>Your Name: <?php echo $firstName." ".$secondName; ?></h1>
    <h2 style="color:green;"><?php echo $Welcome_msg ?></h2>


</body>
</html>