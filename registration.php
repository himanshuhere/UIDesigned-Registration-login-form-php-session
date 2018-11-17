<?php


/* // //  enter your host's data and the name of the database// //  */

$DB_host = 'localhost';
$DB_user = 'root';
$DB_password = '';
$DB_name = 'mydb3';

$connection = mysqli_connect($DB_host, $DB_user, $DB_password); /*  /  connection to database //  */

if($connection == 0){ 				/* //	// MySQL --- 1 to successful connection and 0 to failed connection */
	echo 'connection failed!' 
}

$db_select = mysqli_select_db($DB_name, $connection);
if($db_select == 0){ 					/* // // Same for database selection */
	echo 'Database selection failed!'
}

/* // //  the data entered in the registration HTML page are used  with the variable which will used  to inject in db */

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmationpass = $_POST['confirmmpass'];

/* 	//	// validation of form// // // // */


if($password != $confirmationpass){
	echo 'Passwords doesnt match!'
}
 else if{$name=='' or $surname='' or $username='' or $password=''){
	echo 'Please input some data.'
} 
else
{
	/*  `//	//	 Injecting data from html form to database 	//	//*/
	$query = "INSERT INTO user (name, surname, username, password) VALUES ($name, $lastname, $username, $password)"; 

	$result = mysqli_query($query, $connection);
	if($result == 1) die 'Errore registration.';
	header('location:registration.php')
}
}
?>
