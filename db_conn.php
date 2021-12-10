<?php

$sname= "localhost";

$unmae= "root";

$password = "admin123";

$db_name = "test";

$con = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$con) {

    echo "Connection failed!";

}