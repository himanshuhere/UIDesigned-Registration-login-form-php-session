<?php
session_start(); /*Starting session */

if(isset($_SESSION['username']))   // Check wether user already logged in or not 
 {
    header("Location:userhome.php"); 
 }


$DB_host = 'localhost';
$DB_user = 'root';
$DB_password = '';
$DB_name = 'user';

$username = $_POST['username'];
$password = $_POST['password'];
$connection = mysqli_connect($DB_host, $DB_user, $DB_password);	//	connection establishmnt

$db_select = mysqli_select_db($DB_name, $connection);	// select db
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'"; /*  checking if user exist or not */
	$result = mysqli_query($sql);

 $count = mysqli_num_rows($result);


if($count == 1){
	$_SESSION['username'] = $username;
	session_register('username');
	session_register('password');
	 header("Location:userhome.php"); 
}
else{
	echo "invalid UserName or Password- login failed!";
}

?>
