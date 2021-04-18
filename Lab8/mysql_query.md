mysql -u root -p 


CREATE DATABASE gces;
SHOW DATABASES;
USE gces;
CREATE TABLE student (
    Id INT NOT NULL ,
    Name VARCHAR(30) NOT NULL,
    Address VARCHAR(50) NOT NULL,
    Phone_Number BIGINT NOT NULL,
    Bio VARCHAR(200)
);



CREATE TABLE users (
    Id INT NOT NULL ,
    Username VARCHAR(15) NOT NULL UNIQUE,
    Password VARCHAR(100) NOT NULL ,
    Email VARCHAR(40) NOT NULL UNIQUE
 );


 CREATE TABLE addresses (
    Id INT NOT NULL , 
    User_Id INT NOT NULL ,
    Country VARCHAR(15) NOT NULL,
    State VARCHAR(15),
    District VARCHAR(20) NOT NULL,
    Address1 VARCHAR(50),
    Address2 VARCHAR(50)
 );


 SHOW TABLES;
 DESCRIBE addresses;
 DESCRIBE users;
 DESCRIBE student;


ALTER TABLE student
RENAME TO students;


 INSERT INTO students ( Id, Name, Address, Phone_Number, Bio )
 VALUES ( 1, 'Ajit Baniya', 'Lamachaur-16', 9863374974, 'Rider' );

 INSERT INTO students ( Id, Name, Address, Phone_Number, Bio )
 VALUES ( 2, 'Bibek Bhattarai', 'Hansapur', 9866009780, 'Programmer' );

 INSERT INTO students ( Id, Name, Address, Phone_Number, Bio )
 VALUES ( 3, 'Dipesh Gautam', 'Lamachaur-19', 9866010874, 'Lifter' );

 INSERT INTO students ( Id, Name, Address, Phone_Number, Bio )
 VALUES ( 4, 'Nishanta Paudel', 'Puranchaur', 9866011248, 'Gamer' );

 INSERT INTO students ( Id, Name, Address, Phone_Number, Bio )
 VALUES ( 5, 'Sanjaya Acharya', 'Lamachaur-16', 9817129227, '' );

 INSERT INTO students ( Id, Name, Address, Phone_Number, Bio )
 VALUES ( 6, 'Sumin Gurung', 'Lamachaur-19', 9816649863, 'Muskan Pasa' );



 INSERT INTO users ( Id, Username, Password, Email )
 VALUES ( 1, 'A_B', MD5('AJIT'), 'ajit@gmail.com' );

 INSERT INTO users ( Id, Username, Password, Email )
 VALUES ( 2, 'B_B', MD5('BIBEK'), 'morphhyy@gmail.com' );

 INSERT INTO users ( Id, Username, Password, Email )
 VALUES ( 3, 'D_G', MD5('DIPESH'), 'be2019se674@gces.edu.np' );

 INSERT INTO users ( Id, Username, Password, Email )
 VALUES ( 4, 'N_P', MD5('NISHANTA'), 'be2019se672@gces.edu.np' );

 INSERT INTO users ( Id, Username, Password, Email )
 VALUES ( 5, 'S_A', MD5('SANJAYA'), 'amitacharya22780@gmail.com' );

 INSERT INTO users ( Id, Username, Password, Email )
 VALUES ( 6, 'S_G', MD5('SUMIN'), 'rockstar666@gmail.com' );



 INSERT INTO addresses ( Id, User_Id, Country, State, District, Address1, Address2 )
 VALUES ( 1, 1, 'Nepal', '', 'Kaski', 'Baniyathar', 'Lamachaur' );

 INSERT INTO addresses ( Id, User_Id, Country, State, District, Address1, Address2 )
 VALUES ( 2, 2, 'Nepal', '', 'Kaski', 'Hansapur', 'Bindabasini' );

 INSERT INTO addresses ( Id, User_Id, Country, State, District, Address1, Address2 )
 VALUES ( 3, 3, 'Nepal', '', 'Kaski', 'Bhaktipath', 'Lamachaur' );

 INSERT INTO addresses ( Id, User_Id, Country, State, District, Address1, Address2 )
 VALUES ( 4, 4, 'Nepal', '', 'Kaski', 'Puranchaur', 'Malepatan' );

 INSERT INTO addresses ( Id, User_Id, Country, State, District, Address1, Address2 )
 VALUES ( 5, 5, 'Nepal', '', 'Kaski', 'Harpak', 'Gairikhor' );

 INSERT INTO addresses ( Id, User_Id, Country, State, District, Address1, Address2 )
 VALUES ( 6, 6, 'Nepal', '', 'Kaski', 'Bhaktipath', 'Ghachowk' );


 SELECT Name FROM students WHERE Name LIKE 'A%';


 UPDATE students 
 SET Address = 'Lamachaur-16,Baniyathar'
 WHERE ID = 1;


 DELETE FROM students WHERE Id = 1 ;

 DELETE FROM students WHERE Id = 2 ;
 