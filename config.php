<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'alkautsar');
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to Mysql: " . mysqli_connect_error();
}
