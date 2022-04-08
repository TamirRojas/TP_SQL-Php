<?php
include './CarGarage_queries.php';
$new_garage = [
    'Garage_name' =>$_POST['Garage_name'],
    'Garage_city' =>$_POST['Garage_city'],
];

var_dump($_POST);
$add_garage = new GarageQueries();
$succeed = $add_garage->addGarage($new_garage);


if (!$succeed){
    // echo "Error";
    header ('Location:display_garages.php?alert=error');
    } 
    else{
    // echo "New garage added succesfully!";
    header ('Location:display_garages.php?alert=created');
    }

?>