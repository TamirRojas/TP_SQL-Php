<?php 
require ('cookie_check.php');
$garage_id=$_GET['garage_id'];

include './CarGarage_queries.php';
$delete_garage = new GarageQueries();
$succeed = $delete_garage->deleteGarage($garage_id);

if (!$succeed){
    header('Location:display_garages.php?alert=delete_error');
}else{
    header('Location:display_garages.php?alert=deleted');
}
?>