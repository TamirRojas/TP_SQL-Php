CREATE DATABASE IF NOT EXISTS tp_sql;

USE tp_sql;

CREATE TABLE tp_sql.garages(
    Garage_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Garage_name VARCHAR(64),
    Garage_city VARCHAR(64),
    Total_profit INT(64)
);

INSERT INTO garages(Garage_name, Garage_city) VALUES 
('Lumière','Nice'),
('Kyle','Nice'),
('Neon','Paris'),
('Gambetta','Paris'),
('Cerberus','Brotteaux'),
('Vanilla','Brotteaux'),
('Azur','Lille'),
('Saphire','Lille'),
('Ruby','Lyon'),
('Poleto','Lyon');

CREATE TABLE tp_sql.cars(
ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Brand VARCHAR(64),
Color VARCHAR(64),
ID_foreach_car_ingarage INT(64),
FOREIGN KEY(ID) REFERENCES garages(Garage_id),
Car_Value INT(64)
);




INSERT INTO cars(Brand, Color, Car_Value, ID_foreach_car_ingarage) VALUES 
('Mercedes-Benz','gold',(ROUND(RAND() * 150000, 50000)), 1),
('Citroen','blue',(ROUND(RAND() * 50000, 5000)),1),
('Lexus','purple',(ROUND(RAND() * 150000, 50000)),1),
('Mini-Copper','white',(ROUND(RAND() * 50000, 5000)),1),
('Tesla','purple',(ROUND(RAND() * 150000, 50000)),1),
('Lexus','white',(ROUND(RAND() * 150000, 50000)),2),
('Porsche','red',(ROUND(RAND() * 275000, 100000)),2),
('MacLaren','blue',(ROUND(RAND() * 275000, 100000)),2),
('Peugeot','white',(ROUND(RAND() * 50000, 5000)),2),
('Ferrari','red',(ROUND(RAND() * 275000, 100000)),2),
('Porsche', 'black',(ROUND(RAND() * 275000, 100000)),3),
('Peugeot','blue',(ROUND(RAND() * 50000, 5000)),3),
('Mercedes-Benz','turquoise',(ROUND(RAND() * 150000, 50000)),3),
('Bughatti','yellow',(ROUND(RAND() * 275000, 100000)),3),
('Tesla','gold',(ROUND(RAND() * 150000, 50000)),3),
('Mercedes-Benz','white',(ROUND(RAND() * 150000, 50000)),4),
('Bughatti','gold',(ROUND(RAND() * 275000, 100000)),4),
('BMW','blue',(ROUND(RAND() * 50000, 5000)),4),
('Tesla','white',(ROUND(RAND() * 150000, 50000)),4),
('Porsche', 'black',(ROUND(RAND() * 275000, 100000)),4),
('Lamborghini','blue',(ROUND(RAND() * 275000, 100000)),5),
('Toyota','blue',(ROUND(RAND() * 50000, 5000)),5),
('Toyota','black',(ROUND(RAND() * 50000, 5000)),5),
('Land-Rover','turquoise',(ROUND(RAND() * 150000, 50000)),5),
('Lexus','purple',(ROUND(RAND() * 150000, 50000)),5),
('Land-Rover','white',(ROUND(RAND() * 150000, 50000)),6),
('Toyota','rose',(ROUND(RAND() * 50000, 5000)),6),
('Ferrari','red',(ROUND(RAND() * 275000, 100000)),6),
('Land-Rover','purple',(ROUND(RAND() * 150000, 50000)),6),
('MacLaren','yellow',(ROUND(RAND() * 275000, 100000)),6),
('Citroen','black',(ROUND(RAND() * 50000, 5000)),7),
('Citroen','rose',(ROUND(RAND() * 50000, 5000)),7),
('Mini-Copper','blue',(ROUND(RAND() * 50000, 5000)),7),
('Land-Rover','purple',(ROUND(RAND() * 150000, 50000)),7),
('Lamborghini','blue',(ROUND(RAND() * 275000, 100000)),7),
('Mini-Copper','rose',(ROUND(RAND() * 50000, 5000)),8),
('Mercedes-Benz','mate',(ROUND(RAND() * 150000, 50000)),8),
('Tesla','mate',(ROUND(RAND() * 150000, 50000)),8),
('Mercedes-Benz','purple',(ROUND(RAND() * 150000, 50000)),8),
('Land-Rover','gold',(ROUND(RAND() * 150000, 50000)),8),
('Lexus','turquoise',(ROUND(RAND() * 150000, 50000)),9),
('Peugeot','rose',(ROUND(RAND() * 50000, 5000)),9),
('BMW','black',(ROUND(RAND() * 50000, 5000)),9),
('Tesla','white',(ROUND(RAND() * 150000, 50000)),9),
('Ferrari', 'black',(ROUND(RAND() * 275000, 100000)),9),
('Lexus','mate',(ROUND(RAND() * 150000, 50000)),10),
('BMW','white',(ROUND(RAND() * 50000, 5000)),10),
('Lamborghini','yellow',(ROUND(RAND() * 275000, 100000)),10),
('Bughatti','blue',(ROUND(RAND() * 275000, 100000)),10),
('MacLaren','blue',(ROUND(RAND() * 275000, 100000)),10);

SELECT * FROM cars ; 

/* SELECT Brand as Cars_List FROM cars; 
    In this order, it will work, selecting the 'Brand' column as changin it's name to 'Cars_List'
   SELECT * as Cars_List FROM cars
    In this order, this won't work 
*/

SELECT Garage_name as GaragesNames_with_L, Garage_id as id, Garage_city as city FROM garages WHERE Garage_name LIKE '%L%';

/* 
SELECT Garage_name,Garage_id, Garage_city as GaragesContainingL,ID,city FROM garages WHERE Garage_name LIKE '%L%';
    Won't work, because we have to select, one for one, the columns that we're going to give an alias separating
    it by comas ,
*/

SELECT Brand, Car_Value as Descedant_value FROM cars ORDER BY Car_Value DESC;

SELECT garage_name, COUNT(Brand) FROM cars JOIN garages ON cars.ID_foreach_car_ingarage = garages.Garage_id GROUP BY garage_name;

SELECT garage_name, SUM(Car_Value) FROM cars JOIN garages ON cars.ID_foreach_car_ingarage = garages.Garage_id GROUP BY garage_name ORDER BY SUM(Car_Value) DESC LIMIT 1;
DELETE FROM cars WHERE Brand LIKE 'E%';
DELETE FROM garages WHERE Garage_city = 'Lyon';
UPDATE cars SET Color = 'green' where Car_Value > 200000; 
UPDATE cars SET Car_Value = 35000 WHERE ID_foreach_car_ingarage = 2; 



/* ('Lumière','Kyle','Neon','Gambetta','Cerberus','Vanilla','Azur','Saphire','Ruby','Poleto');
INSERT INTO garages(Location) VALUES 
('Nice','Paris','Brotteaux','Lille','Lyon'); 
INSERT INTO students(firstname,lastname,state) VALUES ('Test','lOLZ',ROUND(RAND() * 275000, 100000))

ROUND(RAND() * 275000, 100000)
ROUND(RAND() * 150000, 50000)*/