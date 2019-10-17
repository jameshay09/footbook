<?php
$dbc = mysqli_connect("localhost", "jameshay", "", "my_jameshay", "21") //Connect to your Database (Localhost IP, Username, Password, Databasename, LocalPort)
OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );


mysqli_set_charset($dbc, 'utf8');

?>