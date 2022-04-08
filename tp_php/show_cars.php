<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        a{
            margin: 0 0 1em 0;
            font-size: 25px;
            font-family: Arial, Helvetica, sans-serif;
            color: blue;
        }
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
    </style>
<?php 
    require ('cookie_check.php');
    $garage_id = $_GET['garage_id'];
    include './CarGarage_queries.php';
    $show_car = new GarageQueries();
    $show_car -> displayCars($garage_id);
?>
</body>
</html>