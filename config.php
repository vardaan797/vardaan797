<?php
ob_start();
?>
<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$host="localhost";
$user="u797587998_matkam";
$password="Matka@123";
$database="u797587998_matkam";
// echo $_SERVER['SCRIPT_URI'];die();
if(strpos($_SERVER['SCRIPT_URI'],'admin') !== false ){
	if(strpos($_SERVER['SCRIPT_URI'],'login.php') !== false){}
	else{
		if(!isset($_SESSION['adminuser'])){
			header("Location:login.php");
		}
	}	
} else if(strpos($_SERVER['SCRIPT_URI'], 'register.php') !== false || strpos($_SERVER['SCRIPT_URI'], 'login.php') !== false){
} else{
	
}
$link1= new PDO("mysql:host=$host;dbname=$database", $user, $password);
$link = mysqli_connect($host,$user,$password,$database);
if (mysqli_connect_errno()) {
    header("location:install/index.php");
    exit();
}
?>
