<?php
/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the forum can
work correctly.
******************************************************/

//We log to the DataBase
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbs = "spk_saw_topsis";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbs) or die('cannot connect to the server'); 
//mysqli_select_db('database_spk');

// Create connection
//$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbs);

// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//mysqli_select_db($dbs);

//Username of the Administrator
$admin='admin';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Forum Home Page
$url_home = 'index.php';

//Design Name
$design = 'default';


/******************************************************
----------------------Initialization-------------------
******************************************************/
include('init.php');
?>