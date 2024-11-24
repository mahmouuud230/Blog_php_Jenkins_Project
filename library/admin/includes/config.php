<?php 
// DB credentials.
define('DB_HOST','localhost:3306');
define('DB_USER','db_admin');
define('DB_PASS','pass');
define('DB_NAME','library_db');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
