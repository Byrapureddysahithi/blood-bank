<?php 
// DB credentials.
define('DB_HOST','bsahithisql1.mysql.database.azure.com');
define('DB_USER','bsahithi');
define('DB_PASS','Sadhana17052003');
define('DB_NAME','bbdms');
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
