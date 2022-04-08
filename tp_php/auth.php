<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authenthification</title>
</head>
<body>
    <?php 
    include './CarGarage_queries.php';
    $cookie_status = new GarageQueries;
    $cookie_status -> showCookieOperationResult();
    ?>
    <style>
        a{
            display: flex;
            flex-direction: column;
        }
        p{
            margin: 0 0 0 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        form { 
            margin: 1em 0 3em 0;
        }
        div {
            margin: 1em 0 1em 0;
        }
        .alias_error{
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: red;
            font-weight: 500;
        }
    </style>
    <h1>User Alias Authenthification</h1>
    <form method="POST" action="form_auth.php">
        <label for="alias">Alias</label>
        <input type="text" id="alias" name="alias"/>
        <button type="submit">Send</button>
    </form>
    <div><p>Normally, there's no need to click these links below to navigate between the files.</p>
    <p>Once the alias is filled, you're automatically redirected to the Garage List.</p></div>
    
    <a href="./form_auth.php"> FORM AUTH VERIFICATION</a>
    <a href="./add_garage_form.php">ADD GARAGE FORM</a>
    <a href="./display_garages.php">GARAGE LIST</a>
</body>
</html>