<?php   
session_start(); 


$DB_host = 'localhost';
$DB_user = 'root';
$DB_password = '';
$DB_name = 'user';

$username = $_POST['username'];
$password = $_POST['password'];

$connection = mysqli_connect($DB_host, $DB_user, $DB_password); //  connection establishmnt

$db_select = mysqli_select_db($DB_name, $connection);

 ?>


<html>
<head>
 <title> Home | User  </title>
  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="sm-col-12">

<?php

      if(!isset($_SESSION['username']))
       {
           header("Location:Login.html");  
       }

   else {
       $user = $_SESSION['username'];
       // db approach

       $query="SELECT firstname FROM user WHERE username='$userid'";

       if($query_exe = mysqli_query($conn, $query)) {
          $dbrow = mysqli_fetch_assoc($query_exe);
          $username = $dbrow['firstname'];
}
       else{ 
          echo "Welcome ".$username."<br>";
        }
?>

<button class="btn btn-primary">Log Out</button>
</div>
</div>
</div>
</body>
</html>