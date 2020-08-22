<?php 


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'nutrition');

// define('DB_SERVER', 'sql209.epizy.com');
// define('DB_USERNAME', 'epiz_26532598');
// define('DB_PASSWORD', 'bn5LV15obtx4t');
// define('DB_NAME', 'epiz_26532598_nutrition');


$connect = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME) or die('connection to database error');



?>