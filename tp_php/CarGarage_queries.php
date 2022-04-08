<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    class GarageQueries{
        private $dbh;
        private $user = 'root';
        private $pass = '';

        function addGarage($new_garage){
            $this -> startConnection();
            $sql = "INSERT INTO garages (Garage_name, Garage_city) VALUES (:Garage_name, :Garage_city)";
            $stmt = $this->dbh->prepare($sql);
            $succeed = $stmt->execute($new_garage);
            return $succeed;
        }

        function deleteGarage($garage_id){
            $this -> startConnection();
            $sql = "DELETE FROM garages WHERE Garage_id =" .$garage_id ; 
            $query = $this->dbh->query($sql);
            $succeed = $query->execute();
            return $succeed;
        }
        function displayCars($garage_id){
            $this -> startConnection();
            $sql = "SELECT * FROM cars WHERE ID_foreach_car_ingarage =" . $garage_id ; 
            $query = $this->dbh->query($sql);
            $cars = $query->fetchAll();
            echo '<a href="display_garages.php"> <- Garage List</a>';
            foreach($cars as $car){
                echo "<div>".'<p> Car ID = '.$car['ID'].'</p>'
                .'<p> Car Brand = '.$car['Brand'].'</p>'
                .'<p> Car Color = '.$car['Color'].'</p>'
                .'<p> Garage nº = '.$car['ID_foreach_car_ingarage'].'</p>'
                .'<p> Car Value = '.$car['Car_Value'].'</p>'
                ."</div>";                
            }
        }

        function displayGarages(){
            $this -> startConnection();
            $sql = "SELECT * FROM garages";
            $query = $this->dbh->query($sql);
            $garages = $query->fetchAll();
            foreach($garages as $garage){
                echo 
                "<div>"
                .'<p> Garage ID = '.$garage['Garage_id'].'</p>'
                .'<p> Garage Name = '.$garage['Garage_name'].'</p>'
                .'<p> Garage City = '.$garage['Garage_city'].'</p>'
                .'<a href="show_cars.php?garage_id='.$garage['Garage_id'].'">Show Garage Cars</a>'
                .' '.'<a href="garage_delete.php?garage_id='.$garage['Garage_id'].'">Delete Garage</a>'
                ."</div>";
            }
        }
        function startConnection(){
            try {
                $this->dbh = new PDO('mysql:host=localhost;dbname=tp_sql;charset=UTF8', $this->user, $this->pass);
                //echo("<p class='connection'> Connection OK </p>");
            }
            catch(PDOException $ex){
                die("<p class='connection'> Connection KO </p>");
            }
        }

        function showGarageAddOperationResult(){
            if (!empty($_GET['alert'])){
                if($_GET['alert'] == 'created'){
                    echo "<p class='garage_added'> OPERATION = New garage added succesfully! </p>";
                }
                if(($_GET['alert']) == 'error'){
                    echo "<p> OPERATION =  New garage failed </p>";
                }
            };
        }
        function showCookieOperationResult(){
            if (!empty($_GET['alert'])){
                if($_GET['alert'] == 'cookie_succesful'){
                    echo "<p class='added_cookie'> OPERATION = New User Info Added Succesfully! </p>";
                }
                if(($_GET['alert']) == 'cookie_error'){
                    echo "<p class='alias_error'> Please submit a user alias </p>";
                }
            };
        }
        function showDeleteOperationResultt(){
            if (!empty($_GET['alert'])){
                if($_GET['alert'] == 'deleted'){
                    echo "<p class='garage_deleted'> OPERATION = Garage Deleted Succesfully! </p>";
                }
                if(($_GET['alert']) == 'delete_error'){
                    echo "<p> OPERATION = Garage Deleted  Failed </p>";
                }
            };
        }
    }

?>