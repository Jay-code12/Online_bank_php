<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'jordan');

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'blcoyctk_jay111');
// define('DB_PASSWORD', 'ezejoseph123@');
// define('DB_NAME', 'blcoyctk_jay111');
 
/* Attempt to connect to MySQL database */
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

?>