<?php


/* Database config */

$db_host		= 'localhost:3306';
$db_user		= 'root';
$db_pass		= '1';
$db_database	= 'mysql';

/* End config */



$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link) or die("Could not select database"); 
mysql_query("SET names UTF8") or die("Could not select database 2"); 

?>