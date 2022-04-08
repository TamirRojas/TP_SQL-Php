<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage List</title>
</head>
<body>
<style>
        body{ 
            display: flex;
            flex-direction: column;
        }
        p{
            margin:0 0 5px 0;
            
        }
        .connection{
            margin: 0 0 1em 0;
            font-family: 'Times New Roman', Times, serif;
        }
        div {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 15em;
            border-style: solid;
            margin: 0 0 1em 0;
            padding: 5px 0 5px 0;
        }
        .added_cookie{
            display: flex;
            justify-content: center;
            margin: 1em 0 1em 0;
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: medium;
            color: green;
        }
        .garage_added{
            display: flex;
            justify-content: center;
            margin: 1em 0 1em 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: medium;
            color: blueviolet;
        }
        .garage_deleted{   display: flex;
            justify-content: center;
            margin: 1em 0 1em 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: medium;
            color: red;
        }
        a{
            margin: 0.5em 0 0.5em 0;
        }
    </style>
<?php
    echo '<a href="add_garage_form.php">Add Garage Form</a>'
    .' '.'<a href="auth.php">User Authenthification Cookie</a>';

    include './CarGarage_queries.php';
    $display_garages = new GarageQueries();
    $display_garages->showGarageAddOperationResult();
    $display_garages->showCookieOperationResult();
    $display_garages->showDeleteOperationResultt();
    $display_garages->displayGarages();
?>
</body>
</html>