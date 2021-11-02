<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "ercresp@2021";
$dbname = "users_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
