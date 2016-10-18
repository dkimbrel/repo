{"filter":false,"title":"db.sql","tooltip":"/db.sql","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":52,"column":0},"action":"insert","lines":["DROP DATABASE IF EXISTS Olympics;","CREATE DATABASE Olympics;","USE Olympics;","","GRANT SELECT, INSERT, UPDATE, DELETE ,EXECUTE","ON Olympics.*","TO siteuser@localhost","IDENTIFIED BY 'mypass';","CREATE TABLE Countries","(","  ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,","  Country VARCHAR(30)",");","","CREATE TABLE Olympiads","(","  ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,","  City VARCHAR(30),","  Year INTEGER(5)",");","","CREATE TABLE Winners","(","  ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,","  FirstName VARCHAR(30),","  LastName VARCHAR(30),","  YearID int NOT NULL,","  Country int NOT NULL,","  FOREIGN KEY (YearID) REFERENCES Olympiads(ID),","  FOREIGN KEY (Country) REFERENCES Countries(ID)",");","","","","INSERT INTO Countries (Country) VALUE ('China');","INSERT INTO Countries (Country) VALUE ('United States');","","INSERT INTO Olympiads (City, Year) VALUES ('London',2012);","INSERT INTO Olympiads (City, Year) VALUES ('Bejing', 2008);","","INSERT INTO Winners (FirstName, LastName, YearID,Country) VALUES ('Ding','Chen',(SELECT id FROM Olympiads WHERE Year = 2008),(SELECT id FROM Countries WHERE Country = 'China'));","INSERT INTO Winners (FirstName, LastName, YearID,Country) VALUES ('Dawn','Harper',(SELECT id FROM Olympiads WHERE YEAR = 2012),(SELECT id FROM Countries WHERE Country = 'United States'));","","DELIMITER //","CREATE PROCEDURE uspWinnersByCountry(IN countryNum INT (30))","    BEGIN","        SELECT * FROM Winners WHERE ID = countryNum;","    END//","CREATE PROCEDURE uspWinnersByYear(IN yearNum INT(30))","    BEGIN","        SELECT * FROM Winners WHERE YearID = yearNum;","    END//",""],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":13},"end":{"row":14,"column":22},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"start","mode":"ace/mode/sql"}},"timestamp":1476218052309,"hash":"73c35c6c609d5b5f66c981a9e4b12adafbe81d60"}