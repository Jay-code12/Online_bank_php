<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'luna4272_chucks');
define('DB_PASSWORD', 'luna4272_chucks');
define('DB_NAME', 'luna4272_chucks');

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'blcoyctk_jay111');
// define('DB_PASSWORD', 'ezejoseph123@');
// define('DB_NAME', 'blcoyctk_jay111');
 
/* Attempt to connect to MySQL database */
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

?>