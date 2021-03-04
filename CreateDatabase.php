<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';



// Creating connection to database
$connection=new mysqli($db_host,$db_user,$db_password);
//Check connection
if($connection->connect_error){
    die("connection failed" .$connection->connect_error);

}

//Create Database
$sql="CREATE DATABASE emobilisDB";
if ($connection->query($sql) === TRUE)
{
    echo "Successfully Created Database". $connection->connect_error;
}else{
    echo "Creation failed". $connection->connect_error;;
}
$connection->close();
?>
