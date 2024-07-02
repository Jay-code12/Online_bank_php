<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'jordan');

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'luna4272_chucks');
define('DB_PASSWORD', 'luna4272_chucks');
define('DB_NAME', 'luna4272_chucks');
 
/* Attempt to connect to MySQL database */
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

?>