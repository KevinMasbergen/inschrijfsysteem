<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/Amsterdam');

//database credentials
define('DBHOST','localhost');
define('DBUSER','u311429949_kevin');
define('DBPASS','spyro100');
define('DBNAME','u311429949_insys');

//application address
define('DIR','http://www.kevininschrijfsysteem.hol.es/');
define('SITEEMAIL','kmasbergen@hotmail.com');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>
