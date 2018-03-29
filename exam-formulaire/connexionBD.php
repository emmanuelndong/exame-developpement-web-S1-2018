<?php

$server="localhost";
$login="root";
$passwd="root";
$dbname="examen-dev-web";



$con = new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8',$login, $passwd);


?>