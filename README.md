# OsWorkshop1
THis is a system of sending car data such as position, speed etc, to a server usign python script.
The data will be saved in a mysql database, and then a it will be displayed on a webserver via PHP scripts.
MySQL commandoer:
CREATE TABLE car(carID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, position VARCHAR(20), speed VARCHAR(50), time VARCHAR(30));
ALTER TABLE car MODIFY carID int, DROP PRIMARY KEY, ADD PRIMARY KEY (time);
GRANT ALL PRIVILEGES ON *.* TO 'username'@'localhost' IDENTIFIED BY 'password';
SELECT carID, AVG(speed) AS 'AVERAGE SPEED' FROM car WHERE carID = 1;
to delete data entry related to car 1: DELETE FROM car WHERE carID = 1;

