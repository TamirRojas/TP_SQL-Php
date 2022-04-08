<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Garage Form</title>
</head>
<body>
    <h1>Add Desired Garage Infos Here Below</h1>
    <form method="POST"action="garage_add.php">
    <label for="Garage_name">Garage Name</label>
    <input type="text" id="Garage_name" name="Garage_name"/>

    <label for="Garage_city">City</label>
    <input type="text" id="Garage_city" name="Garage_city"/>
    
    <button type ="submit">Send</button>
    </form>    
</body>
</html>
<?php 
require('cookie_check.php');
?>