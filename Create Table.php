<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name= 'emobilisDB';


// Creating connection to database
$connection=new mysqli($db_host,$db_user,$db_password, $db_name);
//Check connection
if($connection->connect_error){
    die("connection failed" .$connection->connect_error);

}
//Create Table
$sql="CREATE TABLE studentinfo(
    id INT (10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR (255) NOT NULL ,
    Secondname VARCHAR (255) NOT NULL,
    Email VARCHAR (255))";
if ($connection->query($sql) === TRUE)
{
    echo "Successfully Created table". $connection->connect_error;
}else{
    echo "Creation failed". $connection->connect_error;;
}
$connection->close();
?>

