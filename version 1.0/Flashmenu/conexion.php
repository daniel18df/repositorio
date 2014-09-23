<?php

define('DB_SERVER', '190.153.212.77');
define('DB_NAME','daniel_fernandez');
define('DB_USER','unab');
define('DB_PASS','unab2014');

$con =mysql_connect(DB_SERVER, DB_USER, DB_PASS);
mysql_select_db(DB_NAME,$con);
?>